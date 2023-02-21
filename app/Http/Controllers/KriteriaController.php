<?php

namespace App\Http\Controllers;
use App\Kriteria;

use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $data['kriteria'] = Kriteria::orderBy('nama_kriteria','ASC')->get();
        return view('admin.kriteria.index',$data);
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
            $kriteria = findFail($id);
            $kriteria->update([
                'nama_kriteria' => $request->nama_kriteria,
                'attribut'      => $request->attribut,
                'bobot'      => $request->bobot,
            ]);
            return back()->with('msg', 'Berhasil merubah data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }

    public function destroy($id)
    {
        try {
            $kriteria = findFail($id);
            $kriteria->delete();
            return back()->with('msg', 'Berhasil merubah data');

        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }
}
