<?php
$jumlah = null;

if (isset($_POST['jumlah_input'])) {
    $jumlah = (int)$_POST['jumlah_input'];
} elseif (isset($_POST['jumlah_current'])) {
    $jumlah = (int)$_POST['jumlah_current'];
}

if (isset($_POST['tambah'])) {
    $jumlah++;
} elseif (isset($_POST['kurang'])) {
    $jumlah = max(0, $jumlah - 1);
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>

<?php if ($jumlah === null): ?>
    <form method="post">
        Jumlah bintang <input type="number" name="jumlah_input"><br>
        <button type="submit">Submit</button>
    </form>

<?php else: ?>
    <p>Jumlah bintang <?= $jumlah ?></p>

    <?php
    $i = 1;
    while ($i <= $jumlah) {
        echo "<img src='star-images-9441.png' width='80' height='80'>";
        $i++;
    }
    ?>
    <br>
    <form method="post">
        <input type="hidden" name="jumlah_current" value="<?= $jumlah ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php endif; ?>

</body>
</html>