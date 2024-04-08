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
Route::get('/partisipan', [PagesController::class, 'partisipan']);
Route::get('/pesan', [PagesController::class, 'pesan']);
Route::get('/lomba', [PagesController::class, 'lomba']);
Route::get('/tambahlomba', [PagesController::class, 'tambahlomba']);
Route::get('/editlomba', [PagesController::class, 'editlomba']);
Route::get('/detaillomba', [PagesController::class, 'detaillomba']);
Route::get('/sponsor', [PagesController::class, 'sponsor']);
Route::get('/tambahsponsor', [PagesController::class, 'tambahsponsor']);
Route::get('/editsponsor', [PagesController::class, 'editsponsor']);
Route::get('/detailsponsor', [PagesController::class, 'detailsponsor']);
Route::get('/berita', [PagesController::class, 'berita']);
Route::get('/tambahberita', [PagesController::class, 'tambahberita']);
Route::get('/editberita', [PagesController::class, 'editberita']);
Route::get('/detailberita', [PagesController::class, 'detailberita']);
Route::get('/administrator', [PagesController::class, 'administrator']);
Route::get('/tambahadministrator', [PagesController::class, 'tambahadministrator']);
Route::get('/editadministrator', [PagesController::class, 'editadministrator']);
Route::get('/detailadministrator', [PagesController::class, 'detailadministrator']);
Route::get('/tim', [PagesController::class, 'tim']);
Route::get('/detailtim', [PagesController::class, 'detailtim']);
Route::get('/setting', [PagesController::class, 'setting']);
Route::get('/editsetting', [PagesController::class, 'editsetting']);
Route::get('/dashboardjuri', [PagesController::class, 'dashboardjuri']);
Route::get('/dashboardpetugas', [PagesController::class, 'dashboardpetugas']);
Route::get('/overviewpeserta', [PagesController::class, 'overviewpeserta']);
Route::get('/profilpeserta', [PagesController::class, 'profilpeserta']);
Route::get('/notifikasipeserta', [PagesController::class, 'notifikasipeserta']);
Route::get('/reportpeserta', [PagesController::class, 'reportpeserta']);


Route::get('/proses', [PagesController::class, 'proses']);
