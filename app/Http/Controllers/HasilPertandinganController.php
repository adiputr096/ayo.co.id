<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilPertandinganController extends Controller
{
    public function indexHasil()
    {
        $data_hasil = \App\Hasil::all();
        return view('hasil_pertandingan.indexHasil', ['data_hasil' => $data_hasil]);
    }

    public function create(Request $request)
    {
        \App\Hasil::create($request->all());
        return redirect('/hasil')->with('sukses','Hasil Pertandingan Berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $hasil = \App\Hasil::find($id);
        return view('hasil_pertandingan/edit', ['hasil' => $hasil]);
    }

    public function update(Request $request, $id)
    {
        $hasil = \App\Hasil::find($id);
        $hasil->update($request->all());
        return redirect('/hasil')->with('sukses','Hasil Pertandingan Berhasil diupdate');
    }

    public function hapus($id)
    {
        $hasil = \App\Hasil::find($id);
        $hasil->delete($hasil);
        return redirect('/hasil')->with('sukses', 'Hasil Pertandingan Berhasil Dihapus');
    }
}
