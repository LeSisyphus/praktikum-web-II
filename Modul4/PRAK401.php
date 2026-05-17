<?php
    $panjang = $_POST["panjang"] ?? '';
    $lebar = $_POST["lebar"] ?? '';
    $nilai = $_POST["nilai"] ?? '';

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
        Panjang : <input type="text" name="panjang" value=<?=$panjang?>><br>
        Lebar   : <input type="text" name="lebar" value=<?=$lebar?>><br>
        Nilai   : <input type="text" name="nilai" value=<?=$nilai?>><br>
        <input type="submit" value="Cetak">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $panjang = (int)$panjang;
        $lebar = (int)$lebar;
        $angka = array_values(array_filter(explode(' ', trim($nilai)), fn($nil) => $nil !== ''));

        if(count($angka) !== $panjang * $lebar) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            $matriks = [];
            $index = 0;
            for($i = 0; $i < $panjang; $i++) {
                for($j = 0; $j < $lebar; $j++) {
                    $matriks[$i][$j] = $angka[$index];
                    $index++;
                }
            }

            echo "<table border='1' cellpadding='15'>";
            for($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for($j = 0; $j < $lebar; $j++) {
                    echo "<td>{$matriks[$i][$j]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>
</body>
</html>