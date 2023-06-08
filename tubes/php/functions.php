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
  $gambar = htmlspecialchars($data["gambar"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $harga = htmlspecialchars($data["harga"]);

  $query = "INSERT INTO wisata
  VALUES 
  (null, '$wisata', '$gambar', '$deskripsi', '$harga')
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
  $gambar = htmlspecialchars($data["gambar"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $harga = htmlspecialchars($data["harga"]);

  $query = "UPDATE wisata SET
            wisata = '$wisata',
            gambar = '$gambar',
            deskripsi = '$deskripsi',
            harga = '$harga'
            WHERE id = $id
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM wisata
            WHERE
            wisata LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' 
            ";
            
  return query($query);
}

function registrasi($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  //username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('username sudah terdaftar!');
      </script>";

      return false;
  }

  //cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
        alert('konfirmasi password tidak sesuai!');
    </script>";

    return false;
  } 

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);


  //tambahkan data baru ke db
  mysqli_query($conn, "INSERT INTO user VALUES(null, '$username', '$password')");

  return mysqli_affected_rows($conn);
}

function regisAdmin($data) {
  global $conn;

  $admin = strtolower(stripslashes($data["admin"]));
  $pass = mysqli_real_escape_string($conn, $data["pass"]);
  $pass2 = mysqli_real_escape_string($conn, $data["pass2"]);

  //username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT admin FROM admin WHERE admin = '$admin'");

  if(mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('admin sudah terdaftar!');
      </script>";

      return false;
  }

  //cek konfirmasi password
  if ($pass !== $pass2) {
    echo "<script>
        alert('konfirmasi password tidak sesuai!');
    </script>";

    return false;
  } 

  //enkripsi password
  $pass = password_hash($pass, PASSWORD_DEFAULT);


  //tambahkan data baru ke db
  mysqli_query($conn, "INSERT INTO user VALUES(null, '$admin', '$pass')");

  return mysqli_affected_rows($conn);
}


?>