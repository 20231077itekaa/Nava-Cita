<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        // Jika user sudah terverifikasi, redirect ke dashboard admin
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }

        // Tandai email sebagai terverifikasi di database
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        // Redirect ke dashboard admin
        return redirect()->intended(route('admin.dashboard', absolute: false))->with('status', 'email-verified');
    }
}