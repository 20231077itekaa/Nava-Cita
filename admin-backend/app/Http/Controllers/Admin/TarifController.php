<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tarif; // Pastikan Model Tarif di-import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema; // Tambahkan ini untuk pengecekan tabel

class TarifController extends Controller
{
    /**
     * Menampilkan daftar semua tarif.
     */
    public function index()
    {
        // Pengecekan keamanan: Tangani jika tabel 'tarifs' belum ada
        if (Schema::hasTable('tarifs')) {
            $tarifs = Tarif::latest()->get();
        } else {
            // Jika tabel belum di-migrate, kirim koleksi kosong agar view tidak error
            $tarifs = collect(); 
        }
        
        // PENTING: Folder view adalah 'admin.tarif.index'
        return view('admin.tarif.index', compact('tarifs'));
    }

    /**
     * Menampilkan form untuk membuat tarif baru.
     */
    public function create()
    {
        return view('admin.tarif.create');
    }

    /**
     * Menyimpan tarif baru ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name'     => 'required|string|max:255|unique:tarifs,item_name', 
            'price_weekday' => 'required|numeric|min:0',
            'price_weekend' => 'required|numeric|min:0',
        ]);
        
        Tarif::create($validatedData);

        return redirect()->route('admin.tarif.index')->with('success', 'Item tarif baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit tarif.
     */
    public function edit(Tarif $tarif)
    {
        return view('admin.tarif.edit', compact('tarif'));
    }

    /**
     * Memperbarui data tarif.
     */
    public function update(Request $request, Tarif $tarif)
    {
        $validatedData = $request->validate([
            // Memastikan item_name unik, kecuali untuk dirinya sendiri
            'item_name'     => 'required|string|max:255|unique:tarifs,item_name,' . $tarif->id, 
            'price_weekday' => 'required|numeric|min:0',
            'price_weekend' => 'required|numeric|min:0',
        ]);

        $tarif->update($validatedData);

        return redirect()->route('admin.tarif.index')->with('success', 'Item tarif berhasil diperbarui.');
    }

    /**
     * Menghapus item tarif.
     */
    public function destroy(Tarif $tarif)
    {
        $tarif->delete();
        return redirect()->route('admin.tarif.index')->with('success', 'Item tarif berhasil dihapus.');
    }
}