@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="form-group" action="/ekskul/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">KODE</label>
                <input type="text" class="form-control" name="kode" id="exampleFormControlInput1"
                    placeholder="Masukkan KODE">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Ekskul</label>
                <input type="text" class="form-control" name="nama_ekskul" id="exampleFormControlInput1"
                    placeholder="Masukkan NAMA EKSKuL">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PEMBINA</label>
                <input type="text" class="form-control" name="pembina" id="exampleFormControlInput1"
                    placeholder="Masukkan NAMA PEMBINA">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="simpan">
        </form>
    </div>
@endsection
