<?php
    $nama = $nim = $kelamin = "";
    $nama_error_message = $nim_error_message = $kelamin_error_message = "";
    $show_output = false;


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $kelamin = isset($_POST["kelamin"]) ? $_POST["kelamin"] : "";

        if(empty($nama)) $nama_error_message = "nama tidak boleh kosong";
        if(empty($nim)) $nim_error_message = "nim tidak boleh kosong"; 
        if(empty($kelamin)) $kelamin_error_message = "jenis kelamin tidak boleh kosong"; 

        if(!$nama_error_message && !$nim_error_message && !$kelamin_error_message) $show_output = true;
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
        <label>Nama: </label> <input name="nama" type="text" value="<?= $nama ?>">
        <span style="color: red;">*</span> <span style="color:red;"><?= $nama_error_message?></span> <br>
        <label>NIM: </label><input type="text" name="nim" value="<?= $nim ?>">
        <span style="color: red;">*</span> <span style="color:red;"><?= $nim_error_message?></span> <br>
        <label>Jenis Kelamin: </label>
        <span style="color: red;">*</span> <span style="color:red;"><?= $kelamin_error_message?></span> <br>
        <input type="radio" name="kelamin" id="laki_laki" value="Laki-laki"> 
        <label for="laki_laki">Laki-laki</label><br>
        <input type="radio" name="kelamin" id="perempuan" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>
        <input type="submit">
    </form>

    <?php
        if($show_output){
           echo "<h2>Output</h2> <br> $nama <br> $nim <br> $kelamin";
        }    
    ?>
</body>
</html>