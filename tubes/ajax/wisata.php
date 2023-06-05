<?php 
require '../php/functions.php';

$keyword = $_GET["keyword"]; 
 
$query = "SELECT * FROM wisata
            WHERE
            wisata LIKE '%$keyword%' OR
            link LIKE '%$keyword%'
            ";
$wisata = query($query);



?>

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
                        <img src="../img/<?= $wst['gambar']; ?>" width="50">
                    </td>
                    <td><?= $wst['gambar']; ?></td>
                    <td><?= $wst['wisata']; ?></td>
                    <td><?= $wst['link']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $wst['id']; ?>" class="badge text-bg-warning">ubah</a> |
                        <a href="hapus.php?id=<?= $wst['id']; ?>" class="badge text-bg-danger" onclick="return confirm('YAKIN?')">hapus</a>
                    </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>