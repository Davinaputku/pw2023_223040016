<?php
$mahasiswa = [
    [
        "nama"      => "Davina Putri Kusuma",
        "nrp"       => 223040016,
        "jurusan"   => "Teknik Informatika",
        "email"     => "davina.223040016@mail.unpas.ac.id",
        "gambar"    => "davina.jpg"
    ],
    [
        "nama"      => "Nita Rahmawati",
        "nrp"       => 223040030,
        "jurusan"   => "Teknik Informatika",
        "email"     => "nita.223040030@mail.unpas.ac.id",
        "gambar"    => "nita.jpg"
    ],
    [
        "nama"      => "Indri Tania Lestari",
        "nrp"       => 223040009,
        "jurusan"   => "Teknik Informatika",
        "email"     => "indri.223040009@mail.unpas.ac.id",
        "gambar"    => "indri.jpg"
    ],
    [
        "nama"      => "Gina Meirina",
        "nrp"       => 223040006,
        "jurusan"   => "Teknik Informatika",
        "email"     => "gina.223040006@mail.unpas.ac.id",
        "gambar"    => "gina.jpg"
    ],
    [
        "nama"      => "Revalian Ananda Taufan",
        "nrp"       => 223040012,
        "jurusan"   => "Teknik Informatika",
        "email"     => "revalian.223040012@mail.unpas.ac.id",
        "gambar"    => "lian.jpg"
    ],
    [
        "nama"      => "Diaz Alfiari Rachmad",
        "nrp"       => 223040024,
        "jurusan"   => "Teknik Informatika",
        "email"     => "diaz.223040024@mail.unpas.ac.id",
        "gambar"    => "diaz.jpg"
    ],
    [
        "nama"      => "Daffaa Aprilino",
        "nrp"       => 223040025,
        "jurusan"   => "Teknik Informatika",
        "email"     => "daffaa.223040025@mail.unpas.ac.id",
        "gambar"    => "daffaa.jpg"
    ],
    [
        "nama"      => "Ahmad Mulia Huda",
        "nrp"       => 223040029,
        "jurusan"   => "Teknik Informatika",
        "email"     => "ahmad.223040029@mail.unpas.ac.id",
        "gambar"    => "ahmad.jpeg"
    ],
    [
        "nama"      => "Narapati Keysa Anandi",
        "nrp"       => 223040155,
        "jurusan"   => "Teknik Informatika",
        "email"     => "narapati.223040155@mail.unpas.ac.id",
        "gambar"    => "narapati.jpg"
    ],
    [
        "nama"      => "Rama Dhaniaji Refin",
        "nrp"       => 223040040,
        "jurusan"   => "Teknik Informatika",
        "email"     => "rama.223040040@mail.unpas.ac.id",
        "gambar"    => "refin.jpg"
    ],
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>">
            <li>Nama    :<?= $mhs["nama"]; ?></li>
            <li>NRP     :<?= $mhs["nrp"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <li>Email   :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>