<?php
echo "Tugas 1 <br>";
$i = 5;
while($i <= 100){
    if ($i % 10 == 0) echo $i. "<br />";
    $i++;
}

echo "<br> Tugas 2 <br>";
$bi = 2;
$total = 0;
while ($bi <= 50) {
    $d = $total;
    $total = $total + $bi;

    echo "$d + $bi = $total <br>";
    $bi++; 
}


echo "<br> Tugas 3 <br>";
$so = 3;
while($so <= 127)
    {
        if ($so % 6 == 0) echo $so. "<br />";
        $so ++;
    }

?> 
