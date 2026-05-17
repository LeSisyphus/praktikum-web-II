<?php
$mahasiswa = [
    ['nama' => 'Andi',    'nim' => '2101001', 'uts' => 87, 'uas' => 65],
    ['nama' => 'Budi',    'nim' => '2101002', 'uts' => 76, 'uas' => 79],
    ['nama' => 'Tono',    'nim' => '2101003', 'uts' => 50, 'uas' => 41],
    ['nama' => 'Jessica', 'nim' => '2101004', 'uts' => 60, 'uas' => 75],
];

foreach ($mahasiswa as $i => $mhs) {
    $akhir = 0.4 * $mhs['uts'] + 0.6 * $mhs['uas'];

    if ($akhir >= 80) {
        $huruf = 'A';
    } elseif ($akhir >= 70) {
        $huruf = 'B';
    } elseif ($akhir >= 60) {
        $huruf = 'C';
    } elseif ($akhir >= 50) {
        $huruf = 'D';
    } else {
        $huruf = 'E';
    }

    $mahasiswa[$i]['nilai_akhir'] = $akhir;  
    $mahasiswa[$i]['huruf'] = $huruf;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Document</title>
</head>
<style>
    th{
        background-color: #c0c0c0;
    }
</style>
<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['uts'] ?></td>
            <td><?= $mhs['uas'] ?></td>
            <td><?= $mhs['nilai_akhir'] ?></td>
            <td><?= $mhs['huruf'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>