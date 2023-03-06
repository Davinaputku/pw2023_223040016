<?php 

$luas = '10';
$keliling = '20';

echo "<h4>Menghituung Luas Lingkaran</h4>";
function luaslingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas . "cm<sup>2</sup>";
}
echo "Jari - Jari = $luas cm.</br>";
echo "Luas Lingkaran =" . luaslingkaran(10) . "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function kelilinglingkaran($r) {
    $keliling = 2 * 3.14 * $r;
    return $keliling . "cm";
}
echo "Jari - Jari = $keliling cm. </br>";
echo "Luas Lingkaran =" . kelilinglingkaran(20) . "<hr>";

?>