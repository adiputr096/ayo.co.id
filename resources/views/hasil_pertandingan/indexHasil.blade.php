@extends('layout.master')

@section('content')
            
           @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col 6">
                    <h1>Hasil Pertandingan</h1>
                </div>
                <div class="col 6">
                    <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Hasil Pertandingan
                    </button>  
                </div>
                
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Skor Akhir</th>
                        <th>Pemain Cetak Gol</th>
                        <th>Waktu Gol</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data_hasil as $hasil)
                    <tr>
                        <td>{{$hasil->skor_akhir}}</td>
                        <td>{{$hasil->pemain_cetak_gol}}</td>
                        <td>{{$hasil->waktu_gol}}</td>
                        <td>
                            <a href="/hasil/{{$hasil->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/hasil/{{$hasil->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau Dihapus ?')">Hapus</a>
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Hasil Pertandingan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="/hasil/create" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Skor Akhir</label>
                                <input name="skor_akhir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skor Akhir">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pemain Cetak Gol</label>
                                <input name="pemain_cetak_gol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemain Cetak Gol">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Waktu Gol</label>
                                <input name="waktu_gol" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Gol">
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