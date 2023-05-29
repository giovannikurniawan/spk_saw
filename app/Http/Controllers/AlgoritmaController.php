<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\Kriteria;
use App\Penilaian;

class AlgoritmaController extends Controller
{
    public $ranking; // Tambahkan properti $ranking

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $alternatif = Alternatif::with('penilaian.crips')->get();
        $kriteria = Kriteria::with('crips')->orderBy('nama_kriteria','ASC')->get();
        $penilaian = Penilaian::with('crips','alternatif')->get();
        //return response()->json($kriteria);
        if (count($penilaian) == 0) {
            return redirect(route('penilaian.index'));
        }

        //mencari min max
        foreach ($kriteria as $key => $value){
            foreach ($penilaian as $key_1 => $value_1) {
                if ($value->id == $value_1->crips->kriteria_id) {
                    if ($value->attribut == 'Benefit') {
                        $minMax[$value->id][] = $value_1->crips->bobot;
                    }elseif($value->attribut =='Cost') {
                        $minMax[$value->id][] = $value_1->crips->bobot;
                    }
                }
            }
        }
        //normalisasi
        foreach ($penilaian as $key_1 => $value_1) {
            foreach ($kriteria as $key => $value) {
                if ($value->id == $value_1->crips->kriteria_id) {
                    if ($value->attribut == 'Benefit') {
                        $normalisasi[$value_1->alternatif->nama_alternatif][$value->id] = 
                        $value_1->crips->bobot / max($minMax[$value->id]);
                    }elseif($value->attribut == 'Cost'){
                        $normalisasi[$value_1->alternatif->nama_alternatif][$value->id] = min($minMax
                        [$value->id]) / $value_1->crips->bobot;
                    }
                }
            }
        }

        //perengkingan
        foreach ($normalisasi as $key => $value) {
            foreach ($kriteria as $key_1 => $value_1) {
                $rank[$key][] =$value[$value_1->id] * $value_1->bobot;
            }
        }
        $ranking = $normalisasi;
        foreach ($normalisasi as $key => $value) {
            $ranking[$key][] = array_sum($rank[$key]);
        }
        arsort($ranking);

         $this->ranking = $ranking; // Tetapkan nilai $ranking ke dalam properti $ranking

        return view('admin.perhitungan.index', compact('alternatif','kriteria','normalisasi','ranking'));
    }
}
