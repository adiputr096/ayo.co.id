@extends('layout.master')

@section('content')
            <h1>Edit Pemain</h1>
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col-lg-12">

                        <form action="/pemain/{{$pemain->id}}/update" method="POST">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Pemain</label>
                                <input name="nama_pemain" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemain" value="{{$pemain->nama_pemain}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tinggi Badan</label>
                                <input name="tinggi_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tinggi Badan" value="{{$pemain->tinggi_badan}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                                <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan" value="{{$pemain->berat_badan}}">
                            </div>

                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Posisi Pemain</label>
                                <input name="posisi_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Posisi Pemain" value="{{$pemain->posisi_pemain}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Punggung</label>
                                <input name="nomor_punggung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Punggung" value="{{$pemain->nomor_punggung}}">
                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                </div>
            </div>
@endsection