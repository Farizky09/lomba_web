@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/siswa/create"><button class="btn btn-primary">Tambah</button></a>
        <hr>
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
                                <input class="btn btn-outline-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection
