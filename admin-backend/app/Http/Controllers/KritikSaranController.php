<?php
namespace App\Http\Controllers;

use App\Models\Masukan;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required', 
            'jenis' => 'required',
            'pesan' => 'required'
        ]);

        // Simpan ke database
        Masukan::create([
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'jenis' => $request->jenis,
            'pesan' => $request->pesan
        ]);

        return back()->with('success', 'Terima kasih! Masukan berhasil dikirim.');
    }
}