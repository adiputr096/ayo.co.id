<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalPertandinganController extends Controller
{
    public function indexJadwal()
    {
        $data_jadwal = \App\Jadwal::all();
        return view('jadwal_pertandingan.indexJadwal',['data_jadwal' => $data_jadwal]);
    }

    public function create(Request $request)
    {
        \App\Jadwal::create($request->all());
        return redirect('/pertandingan')->with('sukses','Jadwal Pertandingan Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwal = \App\Jadwal::find($id);
        return view('jadwal_pertandingan/edit', ['jadwal' => $jadwal]);
    }

    public function update(Request $request, $id)
    {
        $jadwal = \App\Jadwal::find($id);
        $jadwal->update($request->all());
        return redirect('/pertandingan')->with('sukses','Jadwal Pertandingan Berhasil diupdate');
    }

    public function hapus($id)
    {
        $jadwal = \App\Jadwal::find($id);
        $jadwal->delete($jadwal);
        return redirect('/pertandingan')->with('sukses', 'Jadwal Pertandingan Berhasil Dihapus');
    }
}
