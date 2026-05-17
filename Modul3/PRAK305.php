<?php
$input = isset($_POST['teks']) ? $_POST['teks'] : '';
$submitted = isset($_POST['submit']);
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<form method="post">
    <input type="text" name="teks" value="<?= htmlspecialchars($input) ?>">
    <button type="submit" name="submit">submit</button>
</form>

<?php
if ($submitted && $input !== '') {
    $panjang = strlen($input);

    echo "<p><strong>Input:</strong></p>";
    echo "<p>$input</p>";

    echo "<p><strong>Output:</strong></p><p>";

    $i = 0;
    while ($i < $panjang) {
        $karakter = $input[$i];
        $j = 0;
        while ($j < $panjang) {
            if ($j == 0) {
                echo strtoupper($karakter);
            } else {
                echo strtolower($karakter);
            }
            $j++;
        }

        $i++;
    }

    echo "</p>";
}
?>
</body>
</html>