<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: php/login.php");
  exit;
}

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
    <title>Tambah Data Wisata</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/login&regis.css">
</head>
<body>
  <section class="regis-login">
    <div class="container">
      <h3>Tambah Data Wisata</h3>
      <div class="registrasi-login">
            <form action="" method="post">
              <ul>
                  <li>
                    <label for="wisata">Nama Wisata</label>
                  </li>
                  <li>
                    <input type="text" name="wisata" id="wisata"autofocus required autocomplete="off">
                  </li>
                  <li>
                    <label for="deskripsi">Deskripsi</label>
                  </li>
                  <li>
                    <input type="text" name="deskripsi" id="deskripsi" autocomplete="off">
                  </li>
                  <li>
                    <label for="harga">Harga Tiket Masuk</label>
                  </li>
                  <li>
                    <input type="text" name="harga" id="harga" autocomplete="off">
                  </li>
                  <li>
                    <label for="gambar">Gambar</label>
                  </li>
                  <li>
                    <input type="text" name="gambar" id="gambar" autocomplete="off">
                  </li>
                  <li>
                    <button type="submit" name="submit" class="submit">Tambah Data</button>
                  </li>
              </ul>
            </form>
        </div>
      </div>
    </section>
</body>
</html>