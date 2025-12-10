<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FotoController extends Controller
{
    /**
     * Menampilkan daftar semua foto (Galeri).
     */
    public function index()
    {
        $fotos = Foto::latest()->get();
        return view('admin.foto.index', compact('fotos'));
    }

    /**
     * Menampilkan form untuk menambah foto baru.
     */
    public function create()
    {
        return view('admin.foto.create');
    }

    /**
     * Menyimpan foto baru ke database dan storage.
     */
    public function store(Request $request)
    {
        // Debug informasi
        Log::info('=== FOTO UPLOAD PROCESS STARTED ===');
        Log::info('Request Method: ' . $request->method());
        Log::info('Has File: ' . ($request->hasFile('file_foto') ? 'YES' : 'NO'));

        // Validasi
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'caption' => 'nullable|string|max:500',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // 5MB
        ]);

        Log::info('Validation passed');

        try {
            // Handle file upload
            if ($request->hasFile('file_foto')) {
                $file = $request->file('file_foto');
                
                Log::info('File details:', [
                    'original_name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                    'extension' => $file->getClientOriginalExtension()
                ]);

                // Generate unique filename
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $folder = 'fotos'; // Sub-folder di dalam storage/app/public
                
                Log::info('Generated filename: ' . $filename);

                // Store file ke disk 'public'
                $path = $file->storeAs($folder, $filename, 'public'); 
                
                Log::info('File stored at: ' . $path);
                
                // Verifikasi file tersimpan
                if (!Storage::disk('public')->exists($path)) {
                    throw new \Exception('File gagal disimpan ke storage public');
                }

                // Create database record
                $foto = Foto::create([
                    'path' => $folder . '/' . $filename, // Path di DB: fotos/namafile.png
                    'judul' => $validatedData['judul'],
                    'caption' => $validatedData['caption'] ?? $validatedData['judul'],
                ]);

                Log::info('Database record created with ID: ' . $foto->id);
                
                Log::info('=== FOTO UPLOAD PROCESS COMPLETED ===');

                return redirect()->route('admin.foto.index')
                    ->with('success', 'Foto berhasil diunggah dan ditambahkan ke galeri.');

            } else {
                Log::error('No file found in request after validation');
                return back()
                    ->with('error', 'File foto tidak ditemukan. Silakan coba lagi.')
                    ->withInput();
            }

        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return back()
                ->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menampilkan form untuk mengedit foto.
     */
    public function edit(Foto $foto)
    {
        return view('admin.foto.edit', compact('foto'));
    }

    /**
     * Memperbarui foto di database.
     */
    public function update(Request $request, Foto $foto)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'caption' => 'nullable|string|max:500',
            'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        try {
            if ($request->hasFile('file_foto')) {
                Log::info('Updating photo with new file');
                
                // Hapus foto lama dari storage
                $oldPath = $foto->path;
                
                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                    Log::info('Old file deleted from public disk: ' . $oldPath);
                }

                // Simpan foto baru
                $file = $request->file('file_foto');
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $folder = 'fotos';
                
                $newPath = $file->storeAs($folder, $filename, 'public'); 
                
                $foto->path = $folder . '/' . $filename;
                Log::info('New file stored: ' . $newPath);
            }

            $foto->judul = $validatedData['judul'];
            $foto->caption = $validatedData['caption'] ?? $foto->caption;
            $foto->save();

            Log::info('Photo updated successfully: ' . $foto->id);

            return redirect()->route('admin.foto.index')
                ->with('success', 'Foto berhasil diperbarui.');

        } catch (\Exception $e) {
            Log::error('Update error: ' . $e->getMessage());
            return back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Menghapus foto dari database dan storage.
     */
    public function destroy(Foto $foto)
    {
        try {
            Log::info('Deleting photo: ' . $foto->id);
            
            // Hapus file dari storage
            $filePath = $foto->path;
            
            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
                Log::info('File deleted from public disk: ' . $filePath);
            } else {
                Log::warning('File not found in storage: ' . $filePath);
            }
            
            // Simpan info untuk message
            $judul = $foto->judul;
            
            // Hapus record dari database
            $foto->delete();
            
            Log::info('Photo record deleted: ' . $foto->id);

            return redirect()->route('admin.foto.index')
                ->with('success', 'Foto "' . $judul . '" berhasil dihapus dari galeri.');

        } catch (\Exception $e) {
            Log::error('Delete error: ' . $e->getMessage());
            return back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}