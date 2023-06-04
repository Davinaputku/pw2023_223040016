<?php 
require 'functions.php';

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT 8 FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) == 1 ) {

        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row["password"])) {
            header("location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/login&regis.css">
</head>
<body>
    <section class="regis-login">
        <div class="container">
            <h3>LOGIN</h3>

            
            <div class="registrasi-login">
                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username">
                        </li>
                        <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <?php if(isset($error)) : ?>
                            <p style="color: red; font-style:italic; ">Username/password yang anda masukan salah</p>
                        <?php endif; ?>
                    </li>
                    <li>
                        <button type="submit" name="login" class="submit">Masuk</button>
                    </li>
                    <li>
                        <div class="registrasi mb-3 mt-2">
                            <p>sudah belum akun? <a href="registrasi.php" class="text-decoration-none">klik disini</a></p>
                        </div>
                        <li>
                            </ul>    
                </form>
            </div>
        </div>
    </section>
</body>
</html>