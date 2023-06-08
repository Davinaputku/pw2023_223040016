<?php 
require 'functions.php';

if(isset($_POST["regisAdmin"])) {

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
                        <label for="admin">Nama Admin</label>
                    </li>
                    <li>
                        <input type="text" name="admin" id="admin" required autocomplete="off">
                    </li>
                    <li>
                        <label for="pass">Password</label>
                    </li>
                    <li>
                        <input type="password" name="pass" id="pass" required autocomplete="off">
                    </li>
                    <li>
                        <label for="pass2">Konfirmasi Password</label>
                    </li>
                    <li>
                        <input type="password" name="pass2" id="pass2" required autocomplete="off">
                    </li>
                    <li>
                        <button type="submit" name="regisAdmin" class="submit">Daftar</button>
                    </li>
                </ul>    
                </form>
            </div>
        </div>
    </section>
</body>
</html>