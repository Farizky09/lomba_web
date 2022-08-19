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
<div class="container"><form class="form-group" action="/siswa/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIS</label>
        <input type="text" class="form-control" name="nis" id="exampleFormControlInput1" placeholder="Masukkan NIS">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan NAMA">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
        <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" placeholder="Masukkan Kelas">
      </div>
      <div class="mb-3">
        <select name="jenis_kelamin" >
            <option value="">Pilih jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    <input type="submit" class="btn btn-primary" name="submit" value="simpan">
</form>
</div>

</body>
</html>