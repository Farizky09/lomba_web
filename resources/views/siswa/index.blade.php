<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="/siswa/create"><button class="btn btn-primary">Tambah</button></a>
        <hr>
        <table class="table table-dark table-striped">
        <td>#</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td colspan="2">Aksi</td>
    </tr>
    @foreach ($siswa as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td>{{$s->nis}}</td>
        <td>{{$s->nama}}</td>
        <td>{{$s->kelas}}</td>
        <td>{{$s->jenis_kelamin}}</td>
        <td>{{$s->alamat}}</td>
        <td>
            <a class="btn btn-outline-warning" href="/siswa/edit">EDIT</a>
            <a class="btn btn-outline-danger" href="/siswa/delete">DELETE</a>
        </td>

    </tr>
    @endforeach
</table>