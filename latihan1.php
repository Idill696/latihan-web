<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
function nilai_akhir($tugas_mandiri, $UTS, $UAS) {
    return ($tugas_mandiri + $UTS + $UAS) / 3;
}

function ketentuan_nilai($nilai) {
    if ($nilai >= 90) {
        return ['A', 'Lulus'];
    } elseif ($nilai >= 80) {
        return ['B', 'Lulus'];
    } elseif ($nilai >= 70) {
        return ['C', 'Lulus'];
    } else {
        return ['D', 'Tidak Lulus'];
    }
}

// Input Nilai
$tugas_mandiri = 95;
$UTS = 90;
$UAS = 89;

// Hitung Nilai Akhir
$nilai = nilai_akhir($tugas_mandiri, $UTS, $UAS);
list($huruf, $status) = ketentuan_nilai($nilai);
?>

<table>
    <tr>
        <th>Nama Mahasiswa</th>
        <th>Nilai Rata-rata</th>
        <th>Nilai Huruf</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>Budi Santoso</td>
        <td><?php echo number_format($nilai, 2); ?></td>
        <td><?php echo $huruf; ?></td>
        <td><?php echo $status; ?></td>
    </tr>
</table>

</body>
</html>