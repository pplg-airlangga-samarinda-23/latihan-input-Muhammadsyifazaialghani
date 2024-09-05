<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <h2>Soal 4</h2>
    <form method="post">
        <label for="birthdate">Masukkan Tanggal Lahir Anda! 👧🏽 </label><br><br>
        <input type="date" name="birthdate" required><br><br>
        <input type="submit" name="submit" value="Lihat Disini!">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $birthdate = $_POST['birthdate'];
        
        $birthDateObj = new DateTime($birthdate);
        $today = new DateTime('today');
        $age = $today->diff($birthDateObj)->y;

        echo "<h3>Umur Anda: $age tahun</h3>";
    }
    ?>
</body>
</html>