<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jarak</title>
</head>
<body>
    <h1>Soal 2  (Konversi Jarak 🚧)</h1>
    <form method="POST" action="">
        <label for="distance">Masukkan Jarak (km): </label>
        <input type="number" step="0.01" id="distance" name="distance" required><br><br>

        <label for="conversion">Pilih Konversi= </label>
        <select id="conversion" name="conversion" required>
            <option value="m">Kilometer ke Meter</option>
            <option value="cm">Kilometer ke Centimeter</option>
            <option value="mm">Kilometer ke Milimeter</option>
        </select><br><br>

        <input type="submit" name="convert" value="Konversi">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $distance = $_POST['distance'];
        $conversion = $_POST['conversion'];

        switch ($conversion) {
            case 'm':
                $result = $distance * 1000;
                $unit = "Meter";
                break;
            case 'cm':
                $result = $distance * 100000;
                $unit = "Centimeter";
                break;
            case 'mm':
                $result = $distance * 1000000;
                $unit = "Milimeter";
                break;
            default:
                $result = 0;
                $unit = "";
                break;
        }

        echo "<h2>Hasil Konversi:</h2>";
        echo "Jarak: " . number_format($result, 2) . " $unit";
    }
    ?>
</body>
</html>