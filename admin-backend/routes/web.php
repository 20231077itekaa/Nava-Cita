<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikSaranController;
// Import Controller Admin (Pastikan path ini sesuai dengan struktur folder Anda)
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\MasukanController;
use App\Http\Controllers\Admin\TarifController;
// Import Controller Autentikasi (PENTING untuk Logout)
use App\Http\Controllers\Auth\AuthenticatedSessionController; 
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;

// Model imports (hanya untuk view closure)
use App\Models\Masukan;
use App\Models\Tarif;
use App\Models\Foto;


// =========================================================================
// 1. Rute PUBLIK (Akses Tanpa Login)
// =========================================================================

// Route Utama (Homepage)
Route::get('/', function() {
    return view('welcome', [
        'tarifs' => Tarif::all(),
        'fotos' => Foto::all()
    ]);
});

// Route untuk Proses Masukan/Kritik & Saran (Form Publik)
Route::post('/masukan', [KritikSaranController::class, 'store'])->name('masukan.store');

// Route Laravel Default
Route::get('/up', function () {
    return view('up');
});


// =========================================================================
// 2. Rute ADMIN (Dilindungi Middleware 'auth')
// =========================================================================

// Route grup untuk Admin. Dilindungi oleh middleware 'auth' (memastikan user sudah login)
// dan memiliki prefix URL 'admin' serta prefix nama rute 'admin.'
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // A. Dashboard (Rute Utama Admin)
    Route::get('/dashboard', function() {
        return view('admin.dashboard.index', [
            'totalFoto' => Foto::count(),
            'totalMasukan' => Masukan::count(),
            'totalTarif' => Tarif::count(), 
            'fotoTerbaru' => Foto::latest()->take(4)->get(),
            'masukanTerbaru' => Masukan::latest()->take(5)->get()
        ]);
    })->name('dashboard');
    
    // B. Resource Routes (Rute CRUD)

    // Foto (CRUD Lengkap) - Memperbaiki [admin.foto.create] not defined
    Route::resource('foto', FotoController::class);
    
    // Tarif (CRUD Lengkap) - Memperbaiki [admin.tarif.index] not defined
    Route::resource('tarif', TarifController::class);
    
    // Masukan (Hanya Index/Show/Destroy karena create/store ada di publik)
    Route::resource('masukan', MasukanController::class)->except(['create', 'store', 'edit', 'update']);
});


// =========================================================================
// 3. Rute Autentikasi Tambahan (Logout)
// =========================================================================

// SOLUSI untuk [logout] not defined. Harus berada di luar grup admin dan memiliki nama 'logout'.
Route::post('logout', [AuthenticatedSessionController::class, 'destroy']) 
    ->name('logout'); 

// Menggunakan file auth.php default dari Breeze/Jetstream untuk Login, Register, dll.
// Pastikan file 'auth.php' ada di folder 'routes'.
require __DIR__.'/auth.php';


// =========================================================================
// 4. Rute Symlink Storage (403 FORBIDDEN/File Tidak Ditemukan)
// =========================================================================

// Rute fallback untuk masalah akses gambar (403 Forbidden / File Not Found)
Route::get('storage/{path}', function ($path) {
    $path = storage_path('app/public/'.$path);
    if (!File::exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->where('path', '.*')->name('storage.local');