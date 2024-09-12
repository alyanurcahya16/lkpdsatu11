<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no5</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Hitung Total Karakter dalam String</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="inputString">Masukkan Kalimat</label>
                        <input type="text" id="inputString" name="inputString" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cek String</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Ambil input dari pengguna
                    $string = $_POST["inputString"];

                    // Menghitung total karakter dalam string
                    $total_karakter = strlen($string);

                    // Menampilkan hasil
                    echo '<div class="alert alert-info mt-3">';
                    echo "Total karakter dalam string: <strong>" . $total_karakter . "</strong>";
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>