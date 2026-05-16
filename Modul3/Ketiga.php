<?php
$a = "5";
$b = "2.5";
$komentar = "selamat Datang ";
echo ("Nilai variabel a aadalah = $a <br>");
//variabel bertipe integer
echo ("Nilai variabel b aadalah = $b <br>");
//variabel bertipe real
echo ("Nilai variabel komentar aadalah = $komentar <br>");
//variabel bertipe string 
$tambah = $a + $b;
//rumas penjumlahan 
$kurang = $a - $b;
//rumus pengurangan
$kali = $a * $b;
//rumus perkalian 
$bagi = $a / $b;
//rumus pembagian 

echo ("Hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("Hasil pengurangan a dan b adalah = $kurang <br>");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");
$nama = "NAILA";
$garis = "===========================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. "Di Lab ". $nama. "<br>Selamat Belajar Pemograman Web <br>";
echo $garis."<br>";
?>