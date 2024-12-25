<?php

function faktorial($a) {
    if ($a <= 1) {
        return 1;
    } else {
        return $a * faktorial($a - 1);
    }
}

$angka = 5;
$hasil = faktorial($angka);

echo "Faktorial dari $angka = $hasil";
?>