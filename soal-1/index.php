<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Volume Tabung</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="POST" action="">
        <label for="radius">Jari-jari Alas (r): </label>
        <input type="number" step="0.01" id="radius" name="radius" required><br><br>

        <label for="height">Tinggi Tabung (t): </label>
        <input type="number" step="0.01" id="height" name="height" required><br><br>

        <input type="submit" name="calculate" value="Hitung Volume">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $volume = pi() * pow($radius, 2) * $height;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Volume Tabung: " . number_format($volume, 2) . " satuan kubik";
    }
    ?>
</body>
</html>