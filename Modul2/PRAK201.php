<?php
$nama1 = $nama2 = $nama3 = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];

        if($nama1 > $nama2){
            $temp = $nama2;
            $nama2 = $nama1;
            $nama1 = $temp;
        } 

        if($nama1 > $nama3){
            $temp = $nama3;
            $nama3 = $nama1;
            $nama1 = $temp;
        }

        if($nama2 > $nama3){
            $temp = $nama3;
            $nama3 = $nama2;
            $nama2 = $temp;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
         <label>Nama: 1</label> <input type="text" name="nama1"  value=<?= $nama1 ?>> <br>
         <label>Nama: 2</label> <input type="text" name="nama2" value=<?= $nama2 ?>> <br>
         <label>Nama: 3</label> <input type="text" name="nama3" value=<?= $nama3 ?>> <br>
        <input type="submit" value="Urutkan">
    </form>
    <?php if($nama1 && $nama2 && $nama3) echo "{$nama1} <br> {$nama2} <br> {$nama3}"; ?>
</body>
</html>