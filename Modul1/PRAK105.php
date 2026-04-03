<?php
    $models = [
            "S22" => "Samsung Galaxy S22",
            "S22+" => "Samsung Galaxy S22+",
            "A03" => "Samsung Galaxy A03",
            "Xcover5" => "Samsung Galaxy Xcover 5"
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid black;
        }
        th{
            background-color: red;
        }
    </style>
</head>
<body>
    <table>
        <tr><th><h2>Daftar Smartphone Samsung</h2></th></tr>
        <?php 
        foreach($models as $model => $nama){
            echo "<tr><td> {$models[$model]} </td></tr>";
        };
        ?>
    </table>
</body>
</html>