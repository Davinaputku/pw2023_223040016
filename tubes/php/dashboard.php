<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/dashboard.css" />
  </head>
  <body>
    <nav class="navbar bg-warning fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand">SELAMAT DATANG ADMIN | <b>DUNIA GINCU</b></a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="icon">
            <h5>
                <i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>
                <i class="fa-solid fa-bell" style="margin-right: 10px;"></i>
                <i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i>
            </h5>
          </div>
        </div>
      </nav>
      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="dashboard.html"><i class="fa-solid fa-gauge"></i> Dashboard </a><hr style="color: white;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="signin.html"><i class="fa-solid fa-right-to-bracket"></i> Sign In </a><hr style="color: white;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="penjualan.html"><i class="fa-solid fa-cart-shopping"></i> Penjualan </a><hr style="color: white;">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="stock.html"><i class="fa-solid fa-sitemap"></i> Stock </a><hr style="color: white;">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
            <h3>
                <i class="fa-solid fa-gauge"></i> Dashboard
            </h3><hr>
            <div class="row text-white">
                <div class="card bg-info" style="width: 18rem; margin-left: 10px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </div>
                      <h5 class="card-title">SIGN IN</h5>
                      <div class="display-4">1.000</div>
                      <a href=""><p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>

                <div class="card bg-success ml-3" style="width: 18rem; margin-left: 20px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                      <h5 class="card-title">PENJUALAN</h5>
                      <div class="display-4">10.000</div>
                      <a href=""><p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>

                <div class="card bg-danger ml-3" style="width: 18rem; margin-left: 20px;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-sitemap"></i>
                        </div>
                      <h5 class="card-title">STOCK</h5>
                      <div class="display-4">50.000</div>
                      <a href=""><p class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="js/admin.js"></script>
  </body>
</html>