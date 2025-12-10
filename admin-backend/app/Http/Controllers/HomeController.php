<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Tarif; // Pastikan ini di-import
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 8 foto terbaru untuk ditampilkan di halaman utama
        $fotos = Foto::latest()->take(8)->get();
        
        // Ambil data tarif dari database
        $tarifs = Tarif::all();
        
        return view('welcome', compact('fotos', 'tarifs'));
    }
}