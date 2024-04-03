<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function check(Request $request)
    {
        // Set validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,petugas,juri,user' 
        ]);

        // Respons kesalahan validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Coba melakukan login
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $user = Auth::user();

            // Periksa peran pengguna
            if ($user->role !== $request->role) {
                Auth::logout();
                throw ValidationException::withMessages([
                    'role' => ['Anda tidak memiliki izin untuk masuk sebagai ' . $request->role],
                ]);
            }

            // Dapatkan token
            $token = $user->createToken('token-name')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Login berhasil',
                'data' => $user,
                'token' => $token,
            ], 200);
        }

        // Jika login gagal
        return response()->json([
            'success' => false,
            'message' => 'Kombinasi email dan password salah',
        ], 401);
    }

    public function store(Request $request)
    {
        // Memeriksa apakah pengguna sudah diautentikasi sebelumnya
        if (Auth::check()) {
            $user = Auth::user();
            $user->tokens()->delete(); // Revoke all tokens for the authenticated user

            return response()->json([
                'success' => true,
                'message' => 'Logout berhasil',
            ], 200);
        } else {
            // Jika pengguna belum diautentikasi
            return response()->json([
                'success' => false,
                'message' => 'Anda belum login.',
            ], 401);
        }
    }
}
