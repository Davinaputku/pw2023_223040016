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
      <div class="row justify-content-center">
        <?php foreach ($wisata as $wst) : ?>
          <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
            <div class="card" data-aos="zoom-out-right">
              <img src="img/<?= $wst['gambar']; ?>" class="card-img-top" alt="Pastel" style="object-fit: contain" />
              <div class="card-body">
                <h5 class="card-title text-center"><?= $wst['wisata']; ?></h5>
                <p class="card-text text-right"><?= $wst['deskripsi']; ?></p>
                <p class="card-text text-center"><?= $wst['harga']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php else : ?>
        <div class="row">
          <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
              data yang anda cari tidak ada
            </div>
          </div>
        </div>
<?php endif ; ?>