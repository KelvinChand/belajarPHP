<?php
//Variable Local
//Membuat Variable Dinamis

$namaDepan = "Kelvin";
$namaBelakang ="Chandra";
$umur = 20;
$ipk = 4.00;
$hadir = true;
$salary = null;

//Bisa Pakai . / , untuk menggabungkan 2 variable String
//echo ("Nama Lengkap : " .$namaDepan .$namaBelakang );
//echo ("Nama Lengkap : ${namaDepan} $namaBelakang");
echo ("Nama Lengkap : ${namaDepan} ${namaBelakang}");
echo"<br>";
echo "Umur: $umur tahun ";
echo "<br>";
unset($umur);
$umur = 21;
echo"Umur Sekarang = $umur";
echo"<br>";
unset($umur);
echo"Umur Sekarang = $umur";
echo"<br>";

//Static Variable
define("TEMPATLAHIR","Palembang");
echo"Tempat Lahir : ".TEMPATLAHIR;

//Variable Global
//Menggunakan $_ Contoh
//$_GET['NPM'];
?>