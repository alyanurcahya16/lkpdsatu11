<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class= "form">
        <form action="input karakter"></form>
        <input type="text">
    </div>
<?php
$teks = "Selamat Ulang Tahun SMK Wikrama Bogor";
$teksDicari = 'a';

$teks = substr_count($teks, $teksDicari);
echo $teks;
echo "<br>";
echo " karakter ". $teksDicari." mucul sebanyak ".substr_count($teks, $teksDicari)." kali dalam kalimat ";
?>
    
</body>
</html>