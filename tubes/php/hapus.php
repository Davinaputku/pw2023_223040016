<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: php/login.php");
  exit;
}
 
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
    alert('Data Berhasil dihapus!');
    document.location.href = 'admin.php';       
    </script>";
} else {
    echo "<script>
    alert('Data GAGAL dihapus!');
    document.location.href = 'admin.php';       
    </script>";
}

?>