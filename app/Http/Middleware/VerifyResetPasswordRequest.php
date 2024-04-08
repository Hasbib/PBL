<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyResetPasswordRequest
{
    public function handle(Request $request, Closure $next)
    {
        // Validasi alamat email yang diberikan
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        return $next($request);
    }
}
