<?php
$pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");
echo "<strong>sebelum diurutkan</strong><br />";
foreach($pegawai as $data => $nama){
    echo "$data: $nama"."<br />";
}
sort($pegawai);
echo "<br>";
echo "<strong>setelah diurutkan</strong><br />";
foreach($pegawai as $data => $nama){
    echo "$data: $nama"."<br/>";
}
?>