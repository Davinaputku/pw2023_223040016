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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
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
              <li class="nav-item">
                <a class="nav-link" href="#eat&drink">Eat & Drink</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cafe">Cafe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/login.php">Login</a>
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
                <img src="img/home/bandung.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/lautan api.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/gunung.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/gedung sate.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/jembatan.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/merdeka.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/home/braga.jpg" class="d-block w-100" alt="...">
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
    <section class="pariwisata py-5" id="pariwisata">
      <div class="container">
        <h2 class="display-3 text-center mb-5">Pariwisata</h2>
        <div class="wisata-list">
          <div class="wisatawan">
            <img src="img/pariwisata/maribaya.jpg" alt="maribaya">
            <p>Maribaya</p>
            <a href="https://www.nativeindonesia.com/the-lodge-maribaya-bandung/" target="_blank">Learn more</a>
          </div>
          <div class="wisatawan">
            <img src="img/pariwisata/kawah putih.jpg" alt="kawahputih">
            <p>Kawah Putih</p>
            <a href="https://www.klook.com/id/blog/kawah-putih-bandung/" target="_blank">Learn more</a>
          </div>
          <div class="wisatawan">
            <img src="img/pariwisata/dago.jpg" alt="dago">
            <p>Dago Dream Park</p>
            <a href="https://dagodreampark.co.id/" target="_blank">Learn more</a>
          </div>
          <div class="wisatawan">
            <img src="img/pariwisata/orchid.jpg" alt="orchid">
            <p>SMA Pasundan 2 Bandung</p>
            <a href="https://www.nativeindonesia.com/orchid-forest-lembang/" target="_blank">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <!--eat & drink-->
    <section class="menu py-5" id="eat&drink">
      <div class="container">
        <h2 class="display-3 text-center mb-5">Makanan dan Minuman Ciri Khas Bandung</h2>
        <div class="row justify-content-center ">
          <div class=" col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
            <div class="card" data-aos="zoom-out-right">
              <img src="img/eat&drink/bandrek.jpg" class="card-img-top" alt="bandrek" style="object-fit: contain" />
              <div class="card-body">
                <h5 class="card-title text-center">Bandrek</h5>
                <p class="card-text text-center">Bandrek adalah minuman tradisional khas Sunda yang dikonsumsi untuk meningkatkan kehangatan tubuh</p>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-down">
            <img src="img/eat&drink/es oyen.jpg" class="card-img-top" alt="esoyen" />
            <div class="card-body">
              <h5 class="card-title text-center">Es Oyen</h5>
              <p class="card-text text-center">sejenis es campur yang di dalamnya berisi kelapa muda, alpukat, kolang-kaling, buah nangka, dan sekoteng</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-left">
            <img src="img/eat&drink/es goyobod.jpg" class="card-img-top" alt="esgoyobod" />
            <div class="card-body">
              <h5 class="card-title text-center">Es Goyobod</h5>
              <p class="card-text text-center">goyobod memiliki arti campuran minuman yang terbuat dari tepung kanji yang diiris persegi, dicampur sirup dan gula merah</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-left">
            <img src="img/eat&drink/mie-kocok.jpg" class="card-img-top" alt="miekocok" />
              <div class="card-body">
                <h5 class="card-title text-center">Mie Kocok Bandung</h5>
                <p class="card-text text-center">hidangan mie bercitarasa kaldu sapi khas kota Bandung</p>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-left">
            <img src="img/eat&drink/surabi.jpg" class="card-img-top" alt="surabi" />
            <div class="card-body">
              <h5 class="card-title text-center">Surabi</h5>
              <p class="card-text text-center">Kuliner ini terbuat dari tepung beras dan dibakar menggunakan tungku yang terbuat dari tanah liat ini memiliki rasa gurih dan legit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 tilt" data-tilt data-tilt-max="50">
          <div class="card" data-aos="zoom-out-left">
            <img src="img/eat&drink/peyeum.jpg" class="card-img-top" alt="peyeum" />
            <div class="card-body">
              <h5 class="card-title text-center">Peyeum</h5>
              <p class="card-text text-center">kudapan yang dihasilkan dari proses fermentasi bahan pangan berkarbohidrat sebagai substrat oleh ragi.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="cafe">
      <div class="cafe py-5">
        <div class="container">
          <h2 class="display-3 text-center mb-5">Cafe</h2>
          <div class="cafe-list">
            <div class="resto">
              <a href="https://instagram.com/sudutpandang.bdg?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/th.jpg" alt="sudutpandang">
              </a>
              <a href="https://instagram.com/naima.bdg?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/naima.jpg" alt="naima">
              </a>
              <a href="https://instagram.com/ruanglapang?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/ruang lapang.jpg" alt="ruanglapang">
              </a>
              <a href="https://instagram.com/trouitbandung?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/trouit.jpg" alt="trouit">
              </a>
            </div> 
            <div class="resto">
              <a href="https://instagram.com/sundatemoon.bdg?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/sun date moon.jpg" alt="sundate">
              </a>
              <a href="https://instagram.com/kincoffeekitchen?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/kin+.jpg" alt="kin+">
              </a>
              <a href="https://instagram.com/degrotecafe?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/de grote.jpg" alt="degrote">
              </a>
              <a href="https://instagram.com/mana.bandung?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/manA.jpg" alt="manA">
              </a>
            </div> 
            <div class="resto">
              <a href="https://instagram.com/halojae?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/warung jae.jpg" alt="warungjae">
              </a>
              <a href="https://instagram.com/utaracafe?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/utara cafe.jpg" alt="utaracafe">
              </a>
              <a href="https://instagram.com/goldstar360?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/goldstar 360.jpg" alt="goldstar">
              </a>
              <a href="https://instagram.com/dpakarbandung?igshid=NTc4MTIwNjQ2YQ==">
                <img src="img/cafe/d'pakar.jpg" alt="dpakar">
              </a>
            </div> 
          </div>
        </div>
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