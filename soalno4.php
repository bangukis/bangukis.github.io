<?php

function faktorial($x)
{
    $angka = 1;
    $faktorial = 1;
    while ($angka <= $x) {
        $faktorial = $faktorial * $angka;
        $angka = $angka + 1;
    }
    return $faktorial;
}

echo faktorial(4);


$a = 1;
$faktorial = $a;
$angka = 4;

while ($a <= $angka) {
    $faktorial = $faktorial * $a;
    $a++;
}

echo 'angka faktorial:';
echo $angka;
echo 'perhitungan faktorial:';
echo $faktorial;
