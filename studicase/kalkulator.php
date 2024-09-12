<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kalkulator</title>
  </head>
  <style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }
</style>
  <body>
  <div class="box">
      <?php
      if (isset($_POST['submit'])) {
          $angka1 = $_POST['angka_pertama'];
          $angka2 = $_POST['angka_kedua'];
          $operator = $_POST['operator'];
          $hasil = 0;

          switch ($operator) {
              case "tambah":
                  $hasil = $angka1 + $angka2;
                  echo "<h2>Hasil: $angka1 + $angka2 = $hasil</h2>";
                  break;
              case "kurang":
                  $hasil = $angka1 - $angka2;
                  echo "<h2>Hasil: $angka1 - $angka2 = $hasil</h2>";
                  break;
              case "kali":
                  $hasil = $angka1 * $angka2;
                  echo "<h2>Hasil: $angka1 * $angka2 = $hasil</h2>";
                  break;
              case "bagi":
                  if ($angka2 != 0) {
                      $hasil = $angka1 / $angka2;
                      echo "<h2>Hasil: $angka1 / $angka2 = $hasil</h2>";
                  } else {
                      echo "<h2>Kesalahan: Pembagian dengan nol tidak diperbolehkan!</h2>";
                  }
                  break;
              default:
                  echo "<h2>Operator tidak valid!</h2>";
                  break;
          }
      }
      ?>

      <form method="POST">
        <input type="number" id="angka_pertama" placeholder="Masukan angka pertama" class="kotak1" name="angka_pertama" required><br>
        <input type="number" id="angka_kedua" placeholder="Masukan angka kedua" class="kotak2" name="angka_kedua" required><br>
        <select name="operator" class="operator" required>
          <option value="tambah">Tambah</option>
          <option value="kurang">Kurang</option>
          <option value="kali">Kali</option>
          <option value="bagi">Bagi</option>
        </select>
        <button type="submit" name="submit">Kirim</button>
      </form>
    </div>
</body>
</html>
