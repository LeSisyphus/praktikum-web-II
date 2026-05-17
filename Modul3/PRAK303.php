<?php
$bawah = isset($_POST['bawah']) ? (int)$_POST['bawah'] : 0;
$atas  = isset($_POST['atas'])  ? (int)$_POST['atas']  : 0;
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<form method="post">
    Batas Bawah : <input type="number" name="bawah" value="<?= $bawah ?>"><br>
    Batas Atas  : <input type="number" name="atas"  value="<?= $atas ?>"><br>
    <button type="submit" name="cetak">Cetak</button>
</form>

<?php
if ($bawah <= $atas) {
    $i = $bawah;
    echo "<p style='font-size:20px;'>";
    do {
        if (($i + 7) % 5 == 0) {
            echo "<img src='star-images-9441.png' width='30' height='30'> ";
        } else {
            echo "$i ";
        }
        $i++;
    } while ($i <= $atas);
    echo "</p>";
}
?>
</body>
</html>