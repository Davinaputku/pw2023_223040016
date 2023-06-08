<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ubah data</title>
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/login&regis.css">
</head>
<body>
  <section class="regis-login">
    <div class="container">
      <h3>Ubah Data Wisata</h3>
      <div class="registrasi-login">
          <form action="" method="post">
            <ul>
              <li>
                <input type="hidden" name="id" value="<?= $wst['id']; ?>">
              </li>
              <li>
                <label for="nama" class="form-label">Nama Wisata</label>
              </li>
              <li>
                <input type="name" class="form-control" name="wisata" id="wisata" autofocus autocomplete="off" value="<?= $wst['wisata']; ?>">
              </li>
              <li>
                <label for="deskripsi" class="form-label">Deskripsi</label>
              </li>
              <li>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" autocomplete="off" value="<?= $wst['deskripsi']; ?>">
              </li>
              <li>
                <label for="harga" class="form-label">Harga Tiket Masuk</label>
              </li>
              <li>
                <input type="text" class="form-control" name="harga" id="harga" autocomplete="off" value="<?= $wst['harga']; ?>">
              </li>
              <li>
                <label for="gambar" class="form-label">Gambar</label>
              </li>
              <li>
                <input type="text" class="form-control" name="gambar" id="gambar" autocomplete="off" value="<?= $wst['gambar']; ?>">
              </li>
              <li>
                <button class="submit" type="submit" name="ubah">Ubah Data</button>
              </li>
            </ul>
          </form>
      </div>
    </div>
  </section>
</body>
</html>