<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/daftar', [PagesController::class, 'daftar']);
Route::get('/lupapassword', [PagesController::class, 'lupapassword']);
Route::get('/informasiberita', [PagesController::class, 'informasiberita']);
Route::get('/index2', [PagesController::class, 'index2']);
