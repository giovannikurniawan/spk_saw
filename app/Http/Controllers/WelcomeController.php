<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AlgoritmaController;

use Illuminate\Http\Request;
use App\Semen;
use App\Kriteria;
use App\Alternatif;
use APP\Penilaian;

class WelcomeController extends Controller
{

   protected $algoritmaController;
   public $ranking; // Tambahkan properti $ranking

public function __construct(AlgoritmaController $algoritmaController)
{
    $this->algoritmaController = $algoritmaController;
    $this->ranking = $this->algoritmaController->ranking;
    // $this->ranking = $this->algoritmaController->rankingData; // Mengakses properti $ranking dari AlgoritmaController
}

public function index()
{
    $semen = Semen::all();
    $kriteria = Kriteria::all();

    
    
    $ranking = $this->ranking; // Mengakses properti $ranking yang telah diinisialisasi dalam konstruktor
    // dd($ranking); // Tampilkan nilai $ranking dalam bentuk array untuk memeriksa isinya

    return view('welcome')->with(['SemenList' => $semen, 'KriteriaList' => $kriteria, 'ranking' => $ranking]);
}


     public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kriteria' => 'required|string',
            'attribut'      => 'required|string',
            'bobot'         => 'required|numeric',
        ]);

        try {
            $kriteria = new Kriteria();
            $kriteria->nama_kriteria = $request->nama_kriteria;
            $kriteria->attribut = $request->attribut;
            $kriteria->bobot = $request->bobot;
            $kriteria->save();
            return back()->with('msg', 'Berhasil menambahkan data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }

     public function edit($id) 
    {
        $data['kriteria'] = Kriteria::findorFail($id);
        return view('admin.kriteria.edit', $data);
    }

     public function update(Request $request, $id) 
    {
        $this->validate($request, [
            'nama_kriteria' => 'required|string',
            'attribut'      => 'required|string',
            'bobot'         => 'required|numeric',
        ]);
        
        try {
            $kriteria = Kriteria::findOrFail($id); 
            $kriteria->update([
                'nama_kriteria' => $request->nama_kriteria,
                'attribut'      => $request->attribut,
                'bobot'      => $request->bobot
            ]);
            return back()->with('msg', 'Berhasil merubah data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }

}
