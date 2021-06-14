@extends('layout.master')

@section('content')
            <h1>Edit Tim</h1>
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col-lg-12">

                        <form action="/tim/{{$tim->id}}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Tim</label>
                            <input name="nama_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tim" value="{{$tim->nama_tim}}">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo Tim</label>
                                <input name="logo_tim" class="form-control" type="file" id="formFile" value="{{$tim->logo_tim}}" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Berdiri Tim</label>
                                <input name="tahun_berdiri_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Berdiri" value="{{$tim->tahun_berdiri_tim}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Tim</label>
                                <input name="alamat_tim" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Tim" value="{{$tim->alamat_tim}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">kota Tim</label>
                                <input name="kota_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kota Tim" value="{{$tim->kota_tim}}">
                            </div>
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                </div>
            </div>
@endsection