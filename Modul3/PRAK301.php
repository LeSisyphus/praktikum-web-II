<?php
    $peserta = isset($_POST["peserta"]) ? (int)$_POST["peserta"] : 0;
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
        Jumlah Peserta <input type="text" name="peserta" value="<?=$peserta?>"> <br>
        <input type="submit" value="Cetak">
    </form>
    
    <?php
        $counter = 1;
        while($peserta >= $counter){
            $warna = ($counter % 2 == 0) ? 'green' : 'red';
            echo "<h2 style='color : $warna;'> Peserta ke-$counter </h2>";
            $counter++;
        }
    ?>
</body>
</html>