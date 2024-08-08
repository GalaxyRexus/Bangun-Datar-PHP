<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iyah</title>
</head>
<body>
<form method = "post">
                <h4>Contoh</h4>
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Alas</label>
                <input type="number" class="form-control" name ="alas" id="alas" placeholder = "Masukkan Alas">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Tinggi</label>
                <input type="number" class="form-control" name = "tinggi" id="tinggi" placeholder = "Masukkan Tinggi">
            </div>
            <button type="submit" name = "submit" class="btn btn-primary">Hitung</button>
            </form>
            <?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        
        if(isset($alas) && isset($tinggi)){
            $luas = $alas * $tinggi;
            echo "<h4>Hasil Luas Jajar Genjang</h4><br>
                Alas = $alas<br>
                Tinggi = $tinggi<br>
                Luas = $luas";
        }
    }
?>
</body>
</html>
