<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Masukan;
use App\Models\Tarif;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [ // ← PERHATIKAN: admin.dashboard.index
            'totalFoto' => Foto::count(),
            'totalMasukan' => Masukan::count(),
            'fotoTerbaru' => Foto::latest()->take(4)->get(),
            'masukanTerbaru' => Masukan::latest()->take(5)->get()
        ]);
    }
}