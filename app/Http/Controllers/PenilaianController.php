<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use App\Alternatif;
use App\Kriteria;

class PenilaianController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::with('penilaian.crips')->get();
        $kriteria = Kriteria::with('crips')->orderBy('nama_kriteria','ASC')->get();
        //return response()->json($kriteria);
        return view('admin.penilaian.index', compact('alternatif','kriteria'));
    }
}
