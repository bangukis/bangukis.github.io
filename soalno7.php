<?php

$data = array(
    '1' => array('nama' => 'Agus', 'gaji' => '8000000', 'level' => 'junior officer', 'region' => 'semarang'),
    '2' => array('nama' => 'Dina', 'gaji' => '15000000', 'level' => 'ass manager', 'region' => 'bandung'),
    '3' => array('nama' => 'Joko', 'gaji' => '25000000', 'level' => 'manager', 'region' => 'jakarta'),
    '4' => array('nama' => 'Ahmad', 'gaji' => '13000000', 'level' => 'middle office', 'region' => 'jakarta'),
    '5' => array('nama' => 'Felicia', 'gaji' => '12500000', 'level' => 'middle office', 'region' => 'bandung')
);

foreach ($data as $key => $value) {
    //print_r($value);
    if ($value["gaji"] >= 15000000) {
        $gajinya = $value["gaji"] * 0.10;
        print_r($value["nama"] . " => ");
        print_r("gaji awal [$value[gaji]] tunjangan 10% dari gaji, [$gajinya] => ");
        region($value["region"], $value["level"], ($value["gaji"] + $gajinya));
    } elseif ($value["gaji"] < 15000000 && $value["gaji"] > 10000000) {
        $gajinya = $value["gaji"] * 0.12;
        print_r($value["nama"] . " => ");
        print_r("gaji awal [$value[gaji]] tunjangan 12% dari gaji, [$gajinya] => ");
        region($value["region"], $value["level"], ($value["gaji"] + $gajinya));
    } else {
        $gajinya = $value["gaji"] * 0.15;
        print_r($value["nama"] . " => ");
        print_r("gaji awal [$value[gaji]] tunjangan 15% dari gaji, [$gajinya] => ");
        region($value["region"], $value["level"], ($value["gaji"] + $gajinya));
    }
    print_r("\n");
}

function region($region, $level, $gajinya)
{
    if ($region == "jakarta") {
        $pendapatan = $gajinya * 0.025;
        print_r("pendapatan di potong 2.5% [$pendapatan] => ");
    } elseif ($region == "bandung") {
        $pendapatan = $gajinya * 0.2;
        print_r("pendapatan di potong 2% [$pendapatan] => ");
    } else {
        $pendapatan = $gajinya * 0.018;
        print_r("pendapatan di potong 1.8% [$pendapatan] => ");
    }
    level($level, ($gajinya - $pendapatan));
}

function level($level, $bonuse)
{
    if ($level == "manager") {
        $bonus = $bonuse + 250000;
        print_r("bonus 250.000, gaji bersih [$bonus]");
    } elseif ($level == "ass manager") {
        $bonus = $bonuse + 175000;
        print_r("bonus 175.000, gaji bersih [$bonus]");
    } elseif ($level == "senior officer") {
        $bonus = $bonuse + 150000;
        print_r("bonus 150.000, gaji bersih [$bonus]");
    } elseif ($level == "middle office") {
        $bonus = $bonuse + 125000;
        print_r("bonus 125.000, gaji bersih [$bonus]");
    } elseif ($level == "junior officer") {
        $bonus = $bonuse + 100000;
        print_r("bonus 100.000, gaji bersih [$bonus]");
    }
}
