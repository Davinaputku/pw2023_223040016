<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
      <h1>Ubah Data Wisata</h1> 
      <div class="row">
        <div class="col-md-8">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $wst['id']; ?>">
            <div class="mb-3 w-25">
              <label for="nama" class="form-label">Nama Wisata</label>
              <input type="name" class="form-control" name="wisata" id="wisata" maxlength="9" autofocus value="<?= $wst['wisata']; ?>">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $wst['deskripsi']; ?>">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga Tiket Masuk</label>
              <input type="text" class="form-control" name="harga" id="harga" value="<?= $wst['harga']; ?>">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $wst['gambar']; ?>">
            </div>
            <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>