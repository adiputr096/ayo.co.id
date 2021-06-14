@extends('layout.master')

@section('content')
            <h1>Edit Jadwal Pertandingan</h1>
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col-lg-12">

                        <form action="/pertandingan/{{$jadwal->id}}/update" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Pertandingan</label>
                                <input name="tanggal_pertandingan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pertandingan" value="{{$jadwal->tanggal_pertandingan}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Waktu Pertandingan</label>
                                <input name="waktu_pertandingan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Pertandingan" value="{{$jadwal->waktu_pertandingan}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tim Tuan Rumah</label>
                                <input name="tim_tuan_rumah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tim Tuan Rumah" value="{{$jadwal->tim_tuan_rumah}}">
                            </div>

                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tim Tamu</label>
                                <input name="tim_tamu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tim Tamu" value="{{$jadwal->tim_tamu}}">
                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                </div>
            </div>
@endsection