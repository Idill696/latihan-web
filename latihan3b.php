<?php
// Contoh menggunakan isset()
$variabel1 = "Halo!";
$variabel2 = null;

// Memeriksa apakah $variabel1 sudah di-set
if (isset($variabel1)) {
    echo "\$variabel1 telah di-set dan nilainya adalah: $variabel1 <br>";
} else {
    echo "\$variabel1 belum di-set atau bernilai null.<br>";
}

// Memeriksa apakah $variabel2 sudah di-set
if (isset($variabel2)) {
    echo "\$variabel2 telah di-set.<br>";
} else {
    echo "\$variabel2 belum di-set atau bernilai null.<br>";
}

// Contoh menggunakan empty()
$variabel3 = "";
$variabel4 = 0;
$variabel5 = "PHP";

// Memeriksa apakah $variabel3 kosong
if (empty($variabel3)) {
    echo "\$variabel3 kosong.<br>";
} else {
    echo "\$variabel3 tidak kosong.<br>";
}

// Memeriksa apakah $variabel4 kosong
if (empty($variabel4)) {
    echo "\$variabel4 kosong.<br>";
} else {
    echo "\$variabel4 tidak kosong.<br>";
}

// Memeriksa apakah $variabel5 kosong
if (empty($variabel5)) {
    echo "\$variabel5 kosong.<br>";
} else {
    echo "\$variabel5 tidak kosong.<br>";
}
?>

<!-- outputnya akan seperti ini -->
$variabel1 telah di-set dan nilainya adalah: Halo!
$variabel2 belum di-set atau bernilai null.
$variabel3 kosong.
$variabel4 kosong.
$variabel5 tidak kosong.