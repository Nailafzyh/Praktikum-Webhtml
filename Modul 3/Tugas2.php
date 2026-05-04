<?php
//menentukan nilai input 
$r = 5; //jari2
$s = 13; //garis sisi miring
$pi = M_PI; //menggunakan konstanta pi bawaan php (3,14)

//menghitung luas bangun runga kerucut 
//menghitung luas alas 
$luasAlas = $pi * pow($r,2);

//menghitung luas permukaan 
$luasPermukaan = ($pi * pow($r,2)) + ($pi * $r * $s);

//menampilakan hasil 
echo "====Perhitungan Bangun Ruang Kerucut===="."<br>";
echo "Jari-jari (r) :$r"."<br>";
echo "Garis Pelukis (s) :$s"."<br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-"."<br>";
echo "Luas Alas :".number_format($luasAlas,2, ',', ','), "<br>";
echo "Luas Permukaan :".number_format($luasPermukaan,2, ',', ','), "<br>";

