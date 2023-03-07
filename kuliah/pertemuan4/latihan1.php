<?php 

// memeriksa apakah $angka itu bilangan GANJIL
// bilangan yang ketika dibagi 2 sisanya 1
function cek_ganjil_genap ($angka) //parameter
{
if($angka % 2 == 1) {
    return "$angka adalah bilangan GANJIL!";
} else {
    return "$angka adalah bilangan GENAP!";
}
}
echo cek_ganjil_genap (10); //argument
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(101);


?>