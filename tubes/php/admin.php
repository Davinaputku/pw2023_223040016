<?php 
    require "functions.php";

    $wisata = query("SELECT * FROM wisata");
    
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
    <div class="container mt-3">
    <h1>Halaman Admin</h1>
        

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Wisata</th>
                <th scope="col">Link</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($wisata as $wst) : ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td>
            <img src="img/<?= $wst['gambar']; ?>" width="50">
            </td>
            <td><?= $wst['gambar']; ?></td>
            <td><?= $wst['wisata']; ?></td>
            <td><?= $wst['link']; ?></td>
            <td>
            <a href="" class="badge text-bg-warning">ubah</a> |
            <a href="" class="badge text-bg-danger">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>