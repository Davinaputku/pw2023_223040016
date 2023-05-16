<?php
require('functions.php');
$name = 'Home';
// koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040016') or die('DATABASE ERROR!');

//query ke table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa") or die(mysqli_error($conn));

$rows = [];
while($row = mysqli_fetch_assoc($result)) {

  $rows[] = $row;

}
//siapkan data $students
$students = $rows;



// $students = [
//   [
//     "nama" => "Davina Putri Kusuma",
//     "npm" => "223040016",
//     "email" => "davina.223040016@unpas.ac.id"
//   ],
//   [
//     "nama" => "Miya Osamu",
//     "npm" => "223040005",
//     "email" => "osamu.223040016@gmail.com"
//   ]
// ];

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
