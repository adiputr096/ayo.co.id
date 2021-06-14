@extends('layout.master')

@section('content')
            <h1>Edit Hasil Pertandingan</h1>
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col-lg-12">

                        <form action="/hasil/{{$hasil->id}}/update" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Skor Akhir</label>
                                <input name="skor_akhir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skor Akhir" value="{{$hasil->skor_akhir}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pemain Cetak Gol</label>
                                <input name="pemain_cetak_gol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemain Cetak Gol" value="{{$hasil->pemain_cetak_gol}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Waktu Gol</label>
                                <input name="waktu_gol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Gol" value="{{$hasil->waktu_gol}}">
                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                </div>
            </div>
@endsection