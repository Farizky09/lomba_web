@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/ekskul/create"><button class="btn btn-primary">Tambah</button></a>
        <hr>
        <table class="table table-dark table-striped">
            <tr>
                <td>ID</td>
                <td>Kode</td>
                <td>Nama EKskul</td>
                <td>Pembina</td>
                <td colspan="2">Aksi</td>
            </tr>

    </div>
    @foreach ($ekskul as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->kode }}</td>
            <td>{{ $s->nama_ekskul }}</td>
            <td>{{ $s->pembina }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-outline-warning" href="/ekskul/{{ $s->id }}/edit">EDIT</a>
                    <form action="/ekskul/{{ $s->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
