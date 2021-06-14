<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function indexPemain()
    {
        $data_pemain = \App\Pemain::all();
        return view('pemain.indexPemain', ['data_pemain' => $data_pemain]);
    }

    public function create(Request $request)
    {
        \App\Pemain::create($request->all());
        return redirect('/pemain')->with('sukses','pemain Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pemain = \App\Pemain::find($id);
        return view('pemain/edit', ['pemain' => $pemain]);
    }

    public function update(Request $request, $id)
    {
        $pemain = \App\Pemain::find($id);
        $pemain->update($request->all());
        return redirect('/pemain')->with('sukses','Pemain Berhasil diupdate');
    }

    public function hapus($id)
    {
        $pemain = \App\Pemain::find($id);
        $pemain->delete($pemain);
        return redirect('/pemain')->with('sukses', 'Pemain Berhasil Dihapus');
    }
}
