<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Ganjil atau Genap</title>
</head>
<body>
    <h2>Soal</h2>
    <form method="post">
        <label for="number">Masukkan bilangan (antara 5 - 20):</label><br><br>
        <input type="number" name="number" min="5" max="20" required><br><br>

        <label for="type">Pilih jenis bilangan:</label><br><br>
        <select name="type" required>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select><br><br>
        <button type=" submit"> submit </button>

    </form>

    <?php
        $number = @$_POST['number'];
        $type = @$_POST['type'];
        $name = "nama"; 

        echo "<h3>Bilangan $type dari 1 hingga $number:</h3>";
        
        // Menentukan apakah akan mencari bilangan ganjil atau genap
        for ($i = 1; $i <= $number; $i++) {
            if ($type == "ganjil" && $i % 2 != 0) {
                echo $i . " - " . $name . "<br>";
            } elseif ($type == "genap" && $i % 2 == 0) {
                echo $i . " - " . $name . "<br>";
            }
        }
    ?>
</body>
</html>