<?php
// Array asosiatif negara ASEAN beserta ibukotanya
$negara_asean = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

// Menampilkan daftar negara dan ibukotanya
echo "<h3>Daftar Negara ASEAN dan Ibukota:</h3>";
echo "<ul>";
foreach ($negara_asean as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>