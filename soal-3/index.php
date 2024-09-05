<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Soal 3 (Kalkulator Sederhana)🧮</h1>
    <form action="" method="post">
        Angka 1 <input type="text" name="Angka1"> <br>
        Angka 2 <input type="text" name="Angka2"> <br>

        Operator: <br>
        <input type="radio" id="tambah" name="operator" value="+" required>
        <label for="tambah">+</label><br>

        <input type="radio" id="kurang" name="operator" value="-" required>
        <label for="kurang">-</label><br>

        <input type="radio" id="kali" name="operator" value="x" required>
        <label for="kali">x</label><br>

        <input type="radio" id="bagi" name="operator" value="/" required>
        <label for="bagi">/</label><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
        if(isset($_POST['hitung']))  {
            $angka1 = $_POST['Angka1'];
            $angka2 = $_POST['Angka2'];
            $operator = $_POST['operator'];

            //Penjumlahan
            if ($operator == "+") {
                $hasil = $angka1 + $angka2;
            }

            //Pengurangan
            else if ($operator == "-") {
                $hasil = $angka1 - $angka2;
            }
            
            //Perkalian
            else if ($operator == "x") {
                $hasil = $angka1 * $angka2;
            }

            //Pembagian
            else if ($operator == "/") {
                $hasil = $angka1 / $angka2;
            }
            echo "<br>";
            echo "$angka1 $operator $angka2 <br>";
            echo "$hasil";
        }
    ?>
</body>
</html>