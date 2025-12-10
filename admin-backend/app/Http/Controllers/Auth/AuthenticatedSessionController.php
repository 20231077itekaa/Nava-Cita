<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan view login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Menangani permintaan login yang masuk.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Melakukan verifikasi kredensial. Jika salah, akan melempar error.
        $request->authenticate(); 

        // Regenerasi sesi jika berhasil.
        $request->session()->regenerate();

        // REDIRECT SUKSES: Diarahkan ke URL Dasbor yang eksplisit.
        return redirect()->intended('/admin/dashboard'); 
    }

    /**
     * Menghancurkan sesi (logout).
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}