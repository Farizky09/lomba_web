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
        <td>{{$s->id}}</td>
        <td>{{$s->kode}}</td>
        <td>{{$s->nama_ekskul}}</td>
        <td>{{$s->pembina}}</td>
        <td>
            <a class="btn btn-outline-warning" href="/ekskul/edit">EDIT</a>
            <a class="btn btn-outline-danger" href="/ekskul/delete">DELETE</a>
        </td>
       

    </tr>
    @endforeach
</table>
</body>

</html>