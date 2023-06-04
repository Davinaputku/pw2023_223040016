<?php
define('BASE_URL', '/pw2023_223040016/tubes/');

// koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'tubes_223040016') or die('DATABASE ERROR!');
return $conn;


function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah ($data) {
  global $conn;
  $wisata = htmlspecialchars($data["wisata"]);
  $link = htmlspecialchars($data["link"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO wisata
  VALUES 
  ('', '$wisata', '$link', '$gambar')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus ($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM wisata WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data) {
  global $conn;

  $id = $data["id"];
  $wisata = htmlspecialchars($data["wisata"]);
  $link = htmlspecialchars($data["link"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE wisata SET
            wisata = '$wisata',
            link = '$link',
            gambar = '$gambar'
            WHERE id = $id
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

?>