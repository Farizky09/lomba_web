@extends('layouts.master')
@section('content')
<div class="class-main">
    <div class="main-content">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-tittle">DATA SISWA</h3>
                        <div class="right">
                            <div>
                                <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Siswa
                            </div>
                        </div>
                   
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td># </td>
                                    <td>NIS</td>
                                    <td>Nama</td>
                                    <td>Kelas</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Alamat</td>
                                    <td colspan="2">Aksi</td> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->nis }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->kelas }}</td>
                                    <td>{{ $s->jenis_kelamin }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-warning" href="/siswa/{{ $s->id }}/edit">EDIT</a>
                                            <form action="/siswa/{{ $s->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-outline-danger" type="submit" onclick="return confirm('apakah anda yakin ingin dihapus?')" value="Delete">
                                            </form>
                                        </div>
                                    </td>
                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
             </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <div class="container">
                  <form class="form-group" action="/siswa/store" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">NIS</label>
                          <input type="text" class="form-control" name="nis" id="exampleFormControlInput1"
                              placeholder="Masukkan NIS">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama</label>
                          <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                              placeholder="Masukkan NAMA">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                          <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1"
                              placeholder="Masukkan Kelas">
                      </div>
                      <div class="mb-3">
                          <select name="jenis_kelamin" class="form-select">
                              <option value="">Pilih jenis Kelamin</option>
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                          <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <input type="submit" name="submit" value="save changes" class="btn btn-primary"></input>
                        </div>
          
                  </form>
              </div>
                </div>
               
              </div>
            </div>
          </div>
@stop
@section('content1')
    <div class="container">
        @if(session('sukses'))
<div class="alert alert-primary" role="alert">
    {{session('sukses')}}
  </div>
  @endif
        {{--  <a href="/siswa/create"><button id="exampleModalLabel" class="btn btn-primary">Tambah</button></a>
        <hr>  --}}
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Siswa
</button><hr>


<tr>
        <table class="table table-hover">
            <td># </td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td colspan="2">Aksi</td>
            </tr>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-outline-warning" href="/siswa/{{ $s->id }}/edit">EDIT</a>
                            <form action="/siswa/{{ $s->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-outline-danger" type="submit" onclick="return confirm('apakah anda yakin ingin dihapus?')" value="Delete">
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
    <!-- Modal -->

@endsection
