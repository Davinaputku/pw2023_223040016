<?php

//array 
//membuat array
$hari = array('senin','selasa','rabu');
$bulan = ['januari','februari', 'maret'];
$myArray = ['davina', 17, false];
$binatang = ['🐱','🐻','🦊','🐻‍❄️','🐮'];

//mencetak array 
// var_dump dan print_r digunakan untuk debugging
echo $hari[1]; //1 elemen mengunakan indexnya
echo"<hr>";
var_dump($hari);
echo"<hr>";
print_r($bulan);
echo"<hr>";
var_dump($myArray);
echo"<hr>";

//manipulasi array 
//menambah elemen di akhir mengunakan index
$hari[]= 'kamis';
print_r($hari);
echo"<hr>";

//menambahkan elemen di akhir menggunakan array_push()
array_push($bulan, 'april', 'mei', 'juni');
print_r($bulan);
echo"<hr>";

//menambahkan elemen di akhir mengunakan array_unshift()
array_unshift($binatang);
print_r($binatang);
echo"<hr>";

//menambahkan elemen di akhir menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo"<hr>";

//menambahkan elemen di akhir mengunakan array_shift()
array_shift($hari);
print_r($hari);
?>