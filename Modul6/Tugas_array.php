<?php
echo "Nama : Naila Binti Fauziah<br>";
echo "NIM  : 202457201056<br>";
echo "Prodi/semester : Sistem Informasi(4)<br>";
echo "----------------------------------------";
echo "<br>";
//array asosiatif pada pasien
echo "<b>-=-=-=-=-Array Data Pasien-=-=-=-=-</b><br>";
$pasien = [
    "Nama" => "Andi Wijaya",
    "Usia" => 40,
    "Diagnosis" => "Demam Berdarah",
    "Dokter" => "Dr. Siti Rahayu",
    "Kamar" => "A-205",
    "Biaya" => 2500000
];
echo "<br/>";
echo "Nama : ", $pasien["Nama"],"<br/>";
echo "Usia : ", $pasien["Usia"], " Tahun", "<br/>";
echo "Diagnosis : ", $pasien["Diagnosis"],"<br/>";
echo "Kamar : ", $pasien["Kamar"],"<br/>";
echo "Dokter : ", $pasien["Dokter"],"<br/>";
echo "Biaya : ", $pasien["Biaya"],"<br/>";

echo "<br>";
echo "<b>-=-=-=-=-Tugas 1 Funngsi Pengurutan-=-=-=-=-</b><br>";
//sort()
sort($pasien);
print_r($pasien);
echo "<br>";

echo "<br>";
echo "<b>-=-=-=-=-Tugas 2 Fungsi Array (5)-=-=-=-=-</b><br>";
//1. array_pop()
array_pop($pasien);
echo "<b>1. Array_pop() untuk menghapus data akhir :</b><br>";
print_r($pasien);
echo "<br>";
echo "<br>";
//2. array_reverse()
$pasien_balik = array_reverse($pasien);
echo "<b>2. Array_reverse() untuk membalikkan urutan array :</b><br>";
print_r($pasien_balik);
echo "<br>";
echo "<br>";
//3. array_unique()
$pasien_unik = array_unique($pasien);
echo "<b>3. Array_unique() untuk menghapus data duplikat :</b><br>";
print_r($pasien_unik);
echo "<br>";
echo "<br>";
//4. array_flip()
$pasien_flip = array_flip($pasien);
echo "<b>4. Array_flip() untuk menukar key dan value :</b><br>";
print_r($pasien_flip);
echo "<br>";
echo "<br>";
//5. array_sum()
$total = array_sum($pasien);
echo "<b>5. Array_sum() Total nilai angka dalam array :</b>" . $total . "<br>";
?>