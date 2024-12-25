Latihan 4d
<?php
// Array multidimensi untuk menyimpan data negara ASEAN
$negara_asean = [
    [
        "negara" => "Indonesia",
        "ibukota" => "D.K.I. Jakarta",
        "kode_telepon" => "+62"
    ],
    [
        "negara" => "Singapura",
        "ibukota" => "Singapura",
        "kode_telepon" => "+65"
    ],
    [
        "negara" => "Malaysia",
        "ibukota" => "Kuala Lumpur",
        "kode_telepon" => "+60"
    ],
    [
        "negara" => "Brunei",
        "ibukota" => "Bandar Seri Begawan",
        "kode_telepon" => "+673"
    ],
    [
        "negara" => "Thailand",
        "ibukota" => "Bangkok",
        "kode_telepon" => "+66"
    ],
    [
        "negara" => "Laos",
        "ibukota" => "Vientiane",
        "kode_telepon" => "+856"
    ],
    [
        "negara" => "Filipina",
        "ibukota" => "Manila",
        "kode_telepon" => "+63"
    ],
    [
        "negara" => "Myanmar",
        "ibukota" => "Naypyidaw",
        "kode_telepon" => "+95"
    ]
];

// Menampilkan data dalam tabel
echo "<h3>Daftar Negara ASEAN</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
      </tr>";

foreach ($negara_asean as $data) {
    echo "<tr>
            <td>{$data['negara']}</td>
            <td>{$data['ibukota']}</td>
            <td>{$data['kode_telepon']}</td>
          </tr>";
}

echo "</table>";
?>