<?php
$data = [
    [
        'no'   => 1,
        'nama' => 'Ridho',
        'matkul' => [
            ['nama' => 'Pemrograman I',                  'sks' => 2],
            ['nama' => 'Praktikum Pemrograman I',         'sks' => 1],
            ['nama' => 'Pengantar Lingkungan Lahan Basah','sks' => 2],
            ['nama' => 'Arsitektur Komputer',             'sks' => 3],
        ]
    ],
    [
        'no'   => 2,
        'nama' => 'Ratna',
        'matkul' => [
            ['nama' => 'Basis Data I',          'sks' => 2],
            ['nama' => 'Praktikum Basis Data I', 'sks' => 1],
            ['nama' => 'Kalkulus',               'sks' => 3],
        ]
    ],
    [
        'no'   => 3,
        'nama' => 'Tono',
        'matkul' => [
            ['nama' => 'Rekayasa Perangkat Lunak',       'sks' => 3],
            ['nama' => 'Analisis dan Perancangan Sistem', 'sks' => 3],
            ['nama' => 'Komputasi Awan',                  'sks' => 3],
            ['nama' => 'Kecerdasan Bisnis',               'sks' => 3],
        ]
    ],
];

foreach ($data as $i => $mhs) {
    $total = 0;
    foreach ($mhs['matkul'] as $mk) {
        $total += $mk['sks'];
    }
    $data[$i]['total_sks']  = $total;
    $data[$i]['keterangan'] = $total < 7 ? 'Revisi KRS' : 'Tidak Revisi';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($data as $mhs): ?>
            <?php foreach ($mhs['matkul'] as $idx => $mk): ?>
            <tr>
                <?php if ($idx === 0): ?>
                    <td rowspan="<?= count($mhs['matkul']) ?>"><?= $mhs['no'] ?></td>
                    <td rowspan="<?= count($mhs['matkul']) ?>"><?= $mhs['nama'] ?></td>
                <?php endif; ?>
                <td><?= $mk['nama'] ?></td>
                <td><?= $mk['sks'] ?></td>
                <?php if ($idx === 0): ?>
                    <td rowspan="<?= count($mhs['matkul']) ?>"><?= $mhs['total_sks'] ?></td>
                    <td rowspan="<?= count($mhs['matkul']) ?>"style="background-color: <?= $mhs['keterangan'] == 'Revisi KRS' ? 'red' : 'green' ?>;"> <?= $mhs['keterangan'] ?> </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>