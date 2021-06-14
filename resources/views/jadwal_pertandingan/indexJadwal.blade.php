@extends('layout.master')

@section('content')
    

           
           @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col 6">
                    <h1>Jadwal Pertandingan</h1>
                </div>
                <div class="col 6">
                    <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Jadwal Pertandingan
                    </button>  
                </div>
                
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Tanggal Pertandingan</th>
                        <th>Waktu Pertandingan</th>
                        <th>Tim Tuan Rumah</th>
                        <th>Tim Tamu</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data_jadwal as $jadwal)
                    <tr>
                        <td>{{$jadwal->tanggal_pertandingan}}</td>
                        <td>{{$jadwal->waktu_pertandingan}}</td>
                        <td>{{$jadwal->tim_tuan_rumah}}</td>
                        <td>{{$jadwal->tim_tamu}}</td>
                        <td>
                            <a href="/pertandingan/{{$jadwal->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pertandingan/{{$jadwal->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau Dihapus ?')">Hapus</a>
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Pertandingan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="/pertandingan/create" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Pertandingan</label>
                            <input name="tanggal_pertandingan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pertandingan">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Waktu Pertandingan</label>
                                <input name="waktu_pertandingan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Pertandingan">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tim Tuan Rumah</label>
                                <input name="tim_tuan_rumah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tuan Rumah">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tim Tamu</label>
                                <input name="tim_tamu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tamu">
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