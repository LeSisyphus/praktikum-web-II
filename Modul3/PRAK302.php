<?php
    $tinggi = isset($_POST["tinggi"]) ? (int)$_POST["tinggi"] : 0;
    $gambar = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tinggi <input type="text" name="tinggi" value="<?= $tinggi ?>"><br>
        Alamat gambar <input type="text" name="alamat" <?= $gambar ?>><br>
        <input type="submit" value="Cetak">
    </form>

    <?php
if ($tinggi > 0 && $gambar !== '') {
    $baris = 1;
    while ($baris <= $tinggi) {
        $indent = ($baris - 1) * 30;
        $jumlah_gambar = $tinggi - $baris + 1;

        echo "<div style='margin-left: {$indent}px;'>";
        $j = 1;
        while ($j <= $jumlah_gambar) {
            echo "<img src='$gambar' width='30' height='30'>";
            $j++;
        }
        echo "</div>";
        $baris++;
    }
}
?>

</body>
</html>