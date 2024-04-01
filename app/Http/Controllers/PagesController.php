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
    public function sponsor()
    {
        return Inertia::render('Admin/Sponsor');
    } 
    public function tambahsponsor()
    {
        return Inertia::render('Admin/Sponsor/Tambahsponsor');
    } 
    public function editsponsor()
    {
        return Inertia::render('Admin/Sponsor/Editsponsor');
    }
    public function detailsponsor()
    {
        return Inertia::render('Admin/Sponsor/Detailsponsor');
    }
    public function berita()
    {
        return Inertia::render('Admin/Berita');
    } 
    public function tambahberita()
    {
        return Inertia::render('Admin/Berita/Tambahberita');
    } 
    public function editberita()
    {
        return Inertia::render('Admin/Berita/Editberita');
    }
    public function detailberita()
    {
        return Inertia::render('Admin/Berita/Detailberita');
    }
    public function administrator()
    {
        return Inertia::render('Admin/Administrator');
    }
    public function tambahadministrator()
    {
        return Inertia::render('Admin/Administrator/Tambahadministrator');
    }
    public function detailadministrator()
    {
        return Inertia::render('Admin/Administrator/Detailadministrator');
    }
    public function tim()
    {
        return Inertia::render('Admin/Tim');
    }
    public function detailtim()
    {
        return Inertia::render('Admin/Tim/Detailtim');
    }
    public function setting()
    {
        return Inertia::render('Admin/Setting');
    }
    public function editsetting()
    {
        return Inertia::render('Admin/Setting/Editsetting');
    }




    public function proses()
    {
        return Inertia::render('Proses');
    }

}
