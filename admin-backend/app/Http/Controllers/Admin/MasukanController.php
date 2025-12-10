<?php
// app/Http/Controllers/Admin/MasukanController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masukan;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    /**
     * Menampilkan semua data Masukan (Kritik & Saran) di halaman admin.
     */
    public function index()
    {
        // Ambil semua data Masukan, urutkan berdasarkan yang terbaru
        $masukans = Masukan::latest()->get();

        return view('admin.masukan.index', compact('masukans'));
    }

    /**
     * Menghapus Masukan tertentu dari database.
     */
    public function destroy(Masukan $masukan)
    {
        try {
            $masukan->delete();

            return redirect()->route('admin.masukan.index')
                             ->with('success', 'Masukan dari ' . $masukan->nama . ' berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.masukan.index')
                             ->with('error', 'Gagal menghapus masukan: ' . $e->getMessage());
        }
    }
}