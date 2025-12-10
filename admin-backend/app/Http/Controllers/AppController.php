<?php

namespace App\Http\Controllers;

use App\Models\Tarif; 
use App\Models\Foto; 
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Mengambil data untuk halaman utama (welcome) dan menampilkannya.
     */
    public function welcome()
    {
        // Gunakan try-catch sementara untuk menghindari error jika tabel/model belum 100% siap
        try {
            $tarifs = Tarif::all();
        } catch (\Exception $e) {
            $tarifs = collect([]); // Jika gagal, kirim koleksi kosong
            error_log("Error saat mengambil data Tarif: " . $e->getMessage());
        }

        try {
            $fotos = Foto::latest()->take(6)->get(); // Ambil 6 foto terbaru
        } catch (\Exception $e) {
            $fotos = collect([]); // Jika gagal, kirim koleksi kosong
            error_log("Error saat mengambil data Foto: " . $e->getMessage());
        }

        // Kirim data ke view welcome
        return view('welcome', compact('tarifs', 'fotos'));
    }
}