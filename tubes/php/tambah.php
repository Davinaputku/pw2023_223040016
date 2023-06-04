<?php 
require 'functions.php';

if(isset($_POST["submit"])) {

    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';       
            </script>";
    } else {
        echo "<script>
        alert('Data GAGAL ditambahkan!');
        document.location.href = 'admin.php';       
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <h1>Tambah Pariwisata</h1>
  
    <div class="row">
      <div class="col-md-8">
        <form action="" method="post">
          <div class="mb-3 w-25">
            <label for="nim" class="form-label">Nama Wisata</label>
            <input type="text" class="form-control" name="wisata" id="wisata" maxlength="9" autofocus required>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Link</label>
            <input type="text" class="form-control" name="link" id="link" required>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" name="gambar" id="gambar">
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>