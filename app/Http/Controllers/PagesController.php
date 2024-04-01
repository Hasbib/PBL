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
    public function partisipan()
    {
        return Inertia::render('Admin/Partisipan');
    }
    public function pesan()
    {
        return Inertia::render('Admin/Pesan');
    }   
    public function lomba()
    {
        return Inertia::render('Admin/Lomba');
    } 
    public function tambahlomba()
    {
        return Inertia::render('Admin/Lomba/Tambahlomba');
    } 
    public function editlomba()
    {
        return Inertia::render('Admin/Lomba/Editlomba');
    } 
    public function detaillomba()
    {
        return Inertia::render('Admin/Lomba/Detaillomba');
    } 




    public function proses()
    {
        return Inertia::render('Proses');
    }

}
