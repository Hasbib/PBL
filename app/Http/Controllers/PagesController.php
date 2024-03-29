<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }
    public function kontak()
    {
        return Inertia::render('Utama/Kontak');
    }
    public function login()
    {
        return Inertia::render('Utama/Login');
    }
    public function daftar()
    {
        return Inertia::render('Utama/Daftar');
    }
    public function lupapassword()
    {
        return Inertia::render('Utama/Lupapassword');
    }
    public function informasiberita()
    {
        return Inertia::render('Utama/Informasiberita');
    }
    public function index2()
    {
        return Inertia::render('Admin/Index2');
    }

}
