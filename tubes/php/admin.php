<?php
session_start();

require 'functions.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}


$wisata = query("SELECT * FROM wisata");

//tombol cari ditekan
if(isset($_POST["cari"])) {
    $wisata = cari($_POST["keyword"]); 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm fixed-top">
        <div class="container">
        <a class="navbar-brand" style="letter-spacing: 5px !important;" href="#">BANDUNG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2 class="display-3 text-center py-5">Selamat Datang Admin</h2>
        
        
        <form class="d-flex pt-4" action="" method="POST">
            <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search.." id="keyword" autofocus autocomplete="off">
            <button class="btn btn-outline-info tombol-cari" name="cari" type="submit" autocomplete="off" id="tombol-cari">Search</button>
        </form>
        
        <br>
        <a href="tambah.php" class="btn btn-info my-5">Tambah data wisata</a>

        <div id="container">
            <?php if($wisata) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                        <th scope="col">Wisata</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga Tiket Masuk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($wisata as $wst) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img src="../img/<?= $wst['gambar']; ?>" width="50">
                            </td>
                            <td><?= $wst['gambar']; ?></td>
                            <td><?= $wst['wisata']; ?></td>
                            <td><?= $wst['deskripsi']; ?></td>
                            <td><?= $wst['harga']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $wst['id']; ?>" class="badge text-bg-info py-1" style="text-decoration: none;">ubah</a>
                                <a href="hapus.php?id=<?= $wst['id']; ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm('YAKIN?')">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-danger" role="alert">
                        data yang anda cari tidak ada
                    </div>
                </div>
            <?php endif ; ?>
        </div>


    </div>
    
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>