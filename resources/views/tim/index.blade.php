@extends('layout.master')

@section('content')
    

           
           @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>    
            @endif
            
            <div class="row">
                <div class="col 6">
                    <h1>Data Tim</h1>
                </div>
                <div class="col 6">
                    <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Tim
                      </button>
                      
                      
                </div>
                
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nama Tim</th>
                        <th>Logo tim</th>
                        <th>Tahun Berdiri Tim</th>
                        <th>Alamat Tim</th>
                        <th>Kota tim</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data_tim as $tim)
                    <tr>
                        <td>{{$tim->nama_tim}}</td>
                        <td><img width="150px" src="{{$tim->logo_tim}}"></td>
                        <td>{{$tim->tahun_berdiri_tim}}</td>
                        <td>{{$tim->alamat_tim}}</td>
                        <td>{{$tim->kota_tim}}</td>
                        <td>
                            <a href="/tim/{{$tim->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/tim/{{$tim->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau Dihapus ?')">Hapus</a>
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Tim</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="/tim/create" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Tim</label>
                            <input name="nama_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tim">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo Tim</label>
                                <input name="logo_tim" class="form-control" type="file" id="formFile">
                              </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Berdiri Tim</label>
                                <input name="tahun_berdiri_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Berdiri">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Tim</label>
                                <input name="alamat_tim" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">kota Tim</label>
                                <input name="kota_tim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kota Tim">
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