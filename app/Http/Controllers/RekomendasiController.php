<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;

class RekomendasiController extends Controller
{
     public function index() 
    {
        $rekomendasi = Kriteria::all();
        return view('welcome', ['rekomendasiList' => $rekomendasi]);
    }
}
