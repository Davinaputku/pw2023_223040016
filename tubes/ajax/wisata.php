<?php 
require '../php/functions.php';

$keyword = $_GET["keyword"]; 
 
$query = "SELECT * FROM wisata
            WHERE
            wisata LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' 
            ";
$wisata = query($query);



?>

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
                            <a href="ubah.php?id=<?= $wst['id']; ?>" class="badge text-bg-warning">ubah</a> |
                            <a href="hapus.php?id=<?= $wst['id']; ?>" class="badge text-bg-danger" onclick="return confirm('YAKIN?')">hapus</a>
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
        </div>
<?php endif ; ?>