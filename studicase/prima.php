<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//mendapat angka dari input form
$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
$hasil = "";

function isPrima($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($angka)) {
        if (isPrima($angka)) {
            $hasil = "$angka adalah bilangan prima.";
        }else {
            $hasil = "$angka bukan bilangan prima";
        }
    }else {
        $hasil = "harap masukan angka yang valid";
    }
    echo "<h1>Hasil : $hasil</h1>";
}
?>
    
    <form method="POST">
            
            <input type="number" id="angka_pertama" placeholder="Masukan angka pertama" name="angka" required>
            <button type="submit" name="submit" style="background-color:#AB82FF;font-weight: 700; cursor: pointer;">kirim</button>
        </form>
</body>
</html>