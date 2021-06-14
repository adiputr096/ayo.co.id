@extends('layout.master')

@section('content')
    

           
           @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col 6">
                    <h1>Data Pemain</h1>
                </div>
                <div class="col 6">
                    <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Pemain
                      </button>
                      
                      
                </div>
                
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nama Pemain</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Posisi Pemain</th>
                        <th>Nomor Punggung</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data_pemain as $pemain)
                    <tr>
                        <td>{{$pemain->nama_pemain}}</td>
                        <td>{{$pemain->tinggi_badan}}</td>
                        <td>{{$pemain->berat_badan}}</td>
                        <td>{{$pemain->posisi_pemain}}</td>
                        <td>{{$pemain->nomor_punggung}}</td>
                        <td>
                            <a href="/pemain/{{$pemain->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pemain/{{$pemain->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau Dihapus ?')">Hapus</a>
                        </td>
                    </tr>
                
                    @endforeach
                </table>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Pemain</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                        <form action="/pemain/create" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pemain</label>
                            <input name="nama_pemain" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemain">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tinggi Badan</label>
                                <input name="tinggi_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tinggi Badan">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                                <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Posisi Pemain</label>
                                <input name="posisi_pemain" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Posisi Pemain">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Punggung</label>
                                <input name="nomor_punggung" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Punggung">
                                </div>
                                      
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                </div>
                
              </div>
            </div>
@endsection