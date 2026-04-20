<?php
$nilai = $dari = $ke = $simbol = "";
$hasil = null;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nilai = floatval($_POST["nilai"]);
    $dari = $_POST["dari"] ?? "";
    $ke = $_POST["ke"] ?? "";
    $celcius;

    $celcius = match ($dari){
        "celcius" => $nilai,
        "fahrenheit" => ($nilai - 32) * 5/9,
        "reamur" => $nilai * 5/4,
        "kelvin" => $nilai - 273.15 
    };

    $hasil = match($ke){
        "celcius" => $celcius,
        "fahrenheit" => ($celcius * 9/5) + 32,
        "reamur" => $celcius * 4/5,
        "kelvin" => $celcius + 273.15
    };
    
    $simbol = match ($ke){
        "celcius"   => "°C",
        "fahrenheit"=> "°F",
        "reamur"    => "°Re",
        "kelvin"    => "K",
    };
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
      <span>Nilai :</span> 
      <input type="text" name="nilai" value=<?= $nilai ?>> <br>

      <span>Dari : </span> <br>
      <input type="radio" name="dari" value="celcius" <?= $dari == "celcius" ? "checked" : "" ?>> 
      <span>Celcius</span> <br>
      <input type="radio" name="dari" value="fahrenheit" <?= $dari == "fahrenheit" ? "checked" : "" ?>> <span>Fahrenheit</span> <br> 
      <input type="radio" name="dari" value="reamur" <?= $dari == "reamur" ? "checked" : "" ?>> 
      <span>Reamur</span> <br>
      <input type="radio" name="dari" value="kelvin" <?= $dari == "kelvin" ? "checked" : "" ?>> 
      <span>Kelvin</span> <br>

      <span>Ke : </span> <br>
      <input type="radio" name="ke" value="celcius" <?= $ke == "celcius" ? "checked" : "" ?>> 
      <span>Celcius</span> <br>
      <input type="radio" name="ke" value="fahrenheit" <?= $ke == "fahrenheit" ? "checked" : "" ?>> 
      <span>Fahrenheit</span> <br>
      <input type="radio" name="ke" value="reamur" <?= $ke == "reamur" ? "checked" : "" ?>> 
      <span>Reamur</span> <br>
      <input type="radio" name="ke" value="kelvin" <?= $ke == "kelvin" ? "checked" : "" ?>> 
      <span>Kelvin</span> <br>
      <input type="submit" value="Konversi">
    </form>

    <?php 
    if($hasil !== null){
        echo "<h3>Hasil Konversi: $hasil $simbol </h3>";
    }
    ?>
</body>
</html>