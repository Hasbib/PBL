<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\VerificationTokenController;
use App\Http\Controllers\ForgotPasswordController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum', 'checkRole:admin,petugas,juri,user'])->get('/user', function (Request $request) {
    return $request->user();
});






Route::resource('/registrasi', RegistrasiController::class);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');


// API endpoint untuk mengirim email verifikasi pengaturan ulang kata sandi
Route::post('/forgot-password', 'App\Http\Controllers\ForgotPasswordController@sendResetLinkEmail');
Route::post('/verify', [EmailVerificationController::class, 'verify']);
Route::post('/lupapasword', [VerificationTokenController::class, 'sendResetPasswordEmail']);