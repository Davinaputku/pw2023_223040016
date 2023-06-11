<?php 
require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/login&regis.css">
</head>
<body>
    <section class="regis-login">
        <div class="container">
            <h3>REGISTRASI</h3>
            <div class="registrasi-login">
                <form action="" method="post">
                <ul>
                    <li>
                        <label for="username">Username</label>
                    </li>
                    <li>
                        <input type="text" name="username" id="username" required autofocus autocomplete="off">
                    </li>
                    <li>
                        <label for="password">Password</label>
                    </li>
                    <li>
                        <input type="password" name="password" id="password" required autocomplete="off">
                    </li>
                    <li>
                        <label for="password2">Konfirmasi Password</label>
                    </li>
                    <li>
                        <input type="password" name="password2" id="password2" required autocomplete="off">
                    </li>
                    <li>
                        <label for="" class="col-sm-2 col-form-label">Status</label>
                    </li>
                    <li>
                        <input type="text" name="status" class="form-control" placeholder="user/admin" required>
                    </li>
                    <li>
                        <button type="submit" name="register" class="submit"><a href="login.php">Daftar</a></button>
                    </li>
                    <li>
                        <p>sudah punya akun? <a href="login.php">klik disini</a></p>
                    <li>
                </ul>    
                </form>
            </div>
        </div>
    </section>
</body>
</html>