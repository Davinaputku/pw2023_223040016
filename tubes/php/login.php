<?php
session_start();
require 'functions.php';

//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan cookie
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }


}

if( isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}


if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // // cek username
    if( mysqli_num_rows($result) === 1 ) {

    // // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]) ) {
        // set session
        $_SESSION["login"] = true;

        //cek remember me
        if(isset($_POST['remember'])) {
            //buat cookie

            setcookie('id', $row['id'], time()+60);
            setcookie('key', hash('sha256', $row['username']), time(+60));
        }

        header("Location: admin.php");
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
                        </li>
                        <li>
                            <input type="text" name="username" id="username" required autocomplete="off">
                        </li>
                        <li>
                            <label for="password">Password</label>
                        </li>
                        <li>
                            <input type="password" name="password" id="password" required autocomplete="off">
                        </li>
                        <li>
                            <?php if(isset($error)) : ?>
                                <p style="color: red; font-style:italic; ">Username/password yang anda masukan salah</p>
                            <?php endif; ?>
                        </li>
                        <li>
                            <input type="checkbox" name="remember" id="remember">
                        </li>
                        <li>
                            <label for="remember">Remember me</label>
                        </li>
                        <li>
                            <button type="submit" name="login" class="submit">Masuk</button>
                        </li>
                        <li>
                            <div class="registrasi mb-3 mt-2">
                                <p>belum punya akun? <a href="registrasi.php" class="text-decoration-none">klik disini</a></p>
                            </div>
                        <li>
                    </ul>    
                </form>
            </div>
        </div>
    </section>
</body>
</html>