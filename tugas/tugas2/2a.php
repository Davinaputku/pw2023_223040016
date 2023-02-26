<?php 

$nama_depan = "Davina";
$nama_belakang = "Putri";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    } elseif ($angka % 3 == 0) {
        echo "$nama_depan <br>";
    } elseif ($angka % 5 == 0) {
        echo "$nama_belakang <br>";
    } else {
        echo "$angka <br>";
    }

}

?>