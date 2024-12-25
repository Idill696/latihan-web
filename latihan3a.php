<?php
function ganti_style($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>

<style>
    .ganti-style {
        font-size: 28px;
        font-family: Arial, sans-serif;
        color: #1A0547;
        font-style: italic;
        font-weight: bold;
    }
</style>