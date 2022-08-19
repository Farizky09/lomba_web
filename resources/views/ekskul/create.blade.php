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
<div class="container"><form class="form-group" action="/ekskul/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">KODE</label>
        <input type="text" class="form-control" name="kode" id="exampleFormControlInput1" placeholder="Masukkan KODE">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Ekskul</label>
        <input type="text" class="form-control" name="nama_ekskul" id="exampleFormControlInput1" placeholder="Masukkan NAMA EKSKuL">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">PEMBINA</label>
        <input type="text" class="form-control" name="pembina" id="exampleFormControlInput1" placeholder="Masukkan NAMA PEMBINA">
      </div>
     
    <input type="submit" class="btn btn-primary" name="submit" value="simpan">
</form>
</div>

</body>
</html>