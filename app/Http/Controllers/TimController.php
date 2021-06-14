<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimController extends Controller
{
    public function index()
    {
        $data_tim = \App\Tim::all();
        return view('tim.index', ['data_tim' => $data_tim]);
    }

    public function create(Request $request)
    {
        \App\Tim::create($request->all());
        return redirect('/tim')->with('sukses','Tim Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tim = \App\Tim::find($id);
        return view('tim/edit', ['tim' => $tim]);
    }
    public function update(Request $request, $id)
    {
        $tim = \App\Tim::find($id);
        $tim->update($request->all());
        return redirect('/tim')->with('sukses','Tim Berhasil diupdate');
    }
    public function hapus($id)
    {
        $tim = \App\Tim::find($id);
        $tim->delete($tim);
        return redirect('/tim')->with('sukses', 'Tim Berhasil Dihapus');
    }
}
