<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crips;
use App\Kriteria;

class CripsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_crips' => 'required|string',
            'bobot'      => 'required|numeric',
        ]);

        try {
            $crips = new Crips();
            $crips->kriteria_id = $request->kriteria_id;
            $crips->nama_crips = $request->nama_crips;
            $crips->bobot = $request->bobot;
            $crips->save();
            return back()->with('msg','Berhasil menambahkan data');
        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }

    public function edit($id)
    {
        $data['crips'] = Crips::findOrFail($id);
        $data['kriteria'] = Kriteria::get();

        return view('admin.crips.edit');

    }

    public function update(Request $request, $id)
    {
        try {
            $crips = Crips::findOrFail($id);
            $crips->update([
                'kriteria_id' => $request->kriteria_id,
                'nama_crips'  => $request->nama_crips,
                'bobot'       => $request->bobot
            ]);
            return back()->with('msg','Berhasil merubah data');
        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }

    public function destroy($id)
    {
        try {
            $crips = Crips::findOrFail($id);
            $crips->delete();
        } catch (Exception $e) {
            \Log::emergency("File:" . $e->getFile().  "Line:" . $e->getLine(). "Message:". 
            $e->getMassage());
            die("Gagal");
        }
    }
}
