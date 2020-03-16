<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{    
    public function home()
    {
        $nama = 'Joko Riyadi';
        return view('index', ['nama' => $nama]);
    }
    public function about()
    {
        return view('about');
    }
    public function mahasiswa()
    {
        return view('mahasiswa');
    }
}
