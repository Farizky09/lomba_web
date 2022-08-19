@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group" action="/ekskul/{{ $ekskul->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">KODE</label>
                <input type="text" class="form-control" name="kode" value="{{ $ekskul->kode }}"
                    id="exampleFormControlInput1" placeholder="Masukkan KODE">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Ekskul</label>
                <input type="text" class="form-control" name="nama_ekskul" value="{{ $ekskul->nama_ekskul }}"
                    id="exampleFormControlInput1" placeholder="Masukkan NAMA EKSKuL">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PEMBINA</label>
                <input type="text" class="form-control" name="pembina" value="{{ $ekskul->pembina }}"
                    id="exampleFormControlInput1" placeholder="Masukkan NAMA PEMBINA">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="simpan">
        </form>
    </div>
@endsection
