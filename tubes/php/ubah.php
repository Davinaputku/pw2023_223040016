<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}
require('functions.php');

$name = 'ubah wisata';
$id = $_GET['id'];
$wst = query("SELECT * FROM wisata WHERE id = $id")[0];

if(isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    } 
}

require('ubah.view.php');
?>