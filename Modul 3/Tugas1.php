<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
echo "Saldo Awal = Rp".$saldoAwal.",- ", "</br>";
echo "Bunga per Bulan = ",$bunga ,"</br>";
echo "Saldo Akhir setelah ".$bulan." bulan adalah : Rp.".$saldoAkhir.",-";
?>