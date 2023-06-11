<?php

require "php/functions.php";

$wisata = query("SELECT * FROM wisata");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $wisata = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANDUNG</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
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
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pariwisata">Pariwisata</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="php/login.php">Login Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--home-->
  <section id="home">
    <div class="container-fluid corousel-contain">
      <div class="home bordered">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/bandung.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/lautan api.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/gunung.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/gedung sate.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/jembatan.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/merdeka.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/braga.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!--about-->
  <section id="about">
    <div class="my-5 mb-5 container col-8">
      <h2 class="display-3 text-center mb-5">ABOUT</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Bandung
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Bandung adalah kota di Jawa Barat, Indonesia. Terkenal sebagai "Kota Kembang" karena keindahan alam dan banyaknya jenis bunga. 
              Kota ini memiliki iklim sejuk dan sering menjadi tujuan liburan dari Jakarta.
              Bandung juga memiliki sejarah yang kaya dan merupakan pusat budaya dan pendidikan di Jawa Barat. 
              Secara keseluruhan, Bandung menawarkan keindahan alam, budaya, kuliner, dan pendidikan yang membuatnya menarik bagi wisatawan dan penduduk setempat.  
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Kenapa Harus ke Bandung
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Bandung memiliki sejuta pesona yang selalu membuat wisatawan terpana. 
              Bagaimana tidak? Mulai dari tempat wisata berbasis alam, destinasi rekreasi kekinian, 
              hingga kuliner dan tren fesyen bisa Sobat Pesona temui semua di Ibu Kota Jawa Barat ini. 
              Saking idealnya, Bandung seringkali menjadi destinasi tujuan rekreasi singkat di hari libur 
              maupun akhir pekan. Baik bersama teman, keluarga, atau sendirian, 
              selalu ada tempat seru dan menyenangkan yang bisa ditelusuri di Kota Bandung.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Kekayaan alam Bandung tak pernah mengecewakan
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Suasana sejuk dan pemandangan hijau di berbagai sudut dataran tinggi di Bandung sangat cocok jadi tempat rileksasi pikiran. 
              Sobat Pesona bisa mencoba berkunjung ke kebun teh asri di kawasan Ciwidey dan menikmati udara segar dengan bebas. 
              Kalau mau destinasi yang lebih hits, menelusuri setiap sisi hutan pinus di Cikole yang cantik nan instagenic adalah jawabannya. Yang tak boleh ketinggalan, 
              apalagi kalau bukan wisata alam ke Gunung Tangkuban Perahu. 
              Ya! Sobat Pesona harus menyaksikan keindahan kawah yang erat kaitannya dengan cerita rakyat Jawa Barat berjudul Sangkuriang itu.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--pariwisata-->
  <section class="menu" id="pariwisata">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h2 class="display-3 text-center text-light py-5">Wisata yang ada di Bandung</h2>
          <form class="d-flex pt-4" action="" method="POST">
            <input class="form-control me-2 my-5 keyword" type="text" name="keyword" placeholder="Search.." id="keyword" autocomplete="off">
            <button class="btn btn-outline-light my-5 tombol-cari" name="cari" type="submit" autocomplete="off" id="tombol-cari">Search</button>
          </form>
        </div>
      </div>

      <div id="container">
        <?php if($wisata) : ?>
          <div class="row justify-content-center">
            <?php foreach ($wisata as $wst) : ?>
              <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
                <div class="card" data-aos="zoom-out-right">
                  <img src="img/<?= $wst['gambar']; ?>" class="card-img-top" alt="Pastel" style="object-fit: contain" />
                  <div class="card-body">
                    <h5 class="card-title text-center"><?= $wst['wisata']; ?></h5>
                    <p class="card-text text-right"><?= $wst['deskripsi']; ?></p>
                    <center>
                      <b class="card-text text-center"><?= $wst['harga']; ?></b>
                    </center>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif ; ?>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p class="copy">
        Copyright 2023 - Davinaputku
      </p>
    </div>
  </footer>

  <script src="js/script2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>