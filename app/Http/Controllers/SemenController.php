<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semen;
use App\Kriteria;

class SemenController extends Controller
{
     public function index()
    {
        $semen = Semen::all();
        return view('welcome')->with('semenList', $semen);
    }
    
}
