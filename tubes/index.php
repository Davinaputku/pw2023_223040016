<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}

require "php/functions.php";

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
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/logout.php">Logout</a>
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
      <h2 class="display-3 text-center mb-5">About</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Kenapa Harus ke Bandung
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--pariwisata-->
  <section class="menu" id="menu">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h2 class="display-3 text-center text-light py-5">Wisata yang ada di Bandung</h2>
          <form class="d-flex p-5" action="" method="POST">
            <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search.." id="keyword">
            <button class="btn btn-outline-light tombol-cari" name="cari" type="submit" autocomplete="off" id="tombol-cari">Search</button>
          </form>
        </div>
      </div>
      <?php $i = 1; ?>
      <?php foreach ($wisata as $wst) : ?>
      <div class="row justify-content-center ">
      <th scope="row"><?= $i++; ?></th>
        <div class=" col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-right">
            <img src="img/<?= $wst['gambar']; ?>" class="card-img-top" alt="Pastel" style="object-fit: contain" />
            <div class="card-body">
              <h5 class="card-title text-center"><?= $wst['wisata']; ?></h5>
              <p class="card-text text-right"><?= $wst['deskripsi']; ?></p>
              <p class="card-text text-center"><?= $wst['harga']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="kontak" id="contact">
    <div class="container">
      <div class="container-fluid pt-5 contact">
        <div class="row pb-3">
          <div class="contact col-md-6">
            <h3 class="display-3 text-light">CONTACT</h3>
            <p class="text-light">
              Silahkan mengisi form yang disebelah kanan jika ada
              yang mau anda tanyakan atau mau yang anda beli.
            </p>
            <p class="text-light">
              Terimakasih.
            </p>

            <a href="https://wa.me/qr/DJFIQTPGLYUCD1">
              <img src="img/WhatsApp.png" alt="whatsapp">
            </a>
          </div>

          <div class="col-md-6">
            <input class="border border-dark form-control form-control mb-1" type="text" name="name" placeholder="Nama">

            <input class="border border-dark form-control form-control mb-1" type="email" name="email" placeholder="Email">

            <input class="border border-dark form-control form-control mb-1" type="text" placeholder="Nomor HP">

            <textarea class="border border-dark form-control form-control-lg" rows="5" name="pesan" placeholder="Masukan Komentar Anda"></textarea>

            <button type="submit" class="btn btn-dark btn-lg form-control">Kirim</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p class="copy">
        Copyright 2022 - Davina Putri Kusuma
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>