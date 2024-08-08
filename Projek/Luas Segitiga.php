<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <!-- Judul -->
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">APLIKASI LUAS BANGUN DATAR</span>
        </div>
        </nav>
        <!-- Sub Judul -->
        <h5 class="text-center">BANGUN DATAR "SEGITIGA"</h5>
        <!-- Konten -->
        <div class="card ms-3 me-3">
        <div class="card-body">
            <div class="row">
            <div class ="col-md-6"><img src="https://thumb.viva.co.id/media/frontend/thumbs3/2022/04/11/6253da08988ca-segitiga_663_372.jpg" class="img-thumbnail" alt="..."></div>
            <div class ="col-md-6"><h4>Apa Itu Segitiga?</h4><br>Segitiga merupakan bangun datar yang dibatasi dengan adanya tiga buah sisi serta memiliki tiga buah titik sudut. Kemudian untuk alas dari segitiga adalah satu dari sisi suatu bangun segitiga<br>
            <div class="alert alert-danger" role="alert">
            Rumus Luas = 1/2 x Alas x Tinggi
            </div>
            </div>
            <div class ="col-md-6">
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
            </form></div>
            <div class ="col-md-6">
            <?php
                            if(isset($_POST['submit'])){
                                $alas = $_POST['alas'];
                                $tinggi = $_POST['tinggi'];
                            
                                if(isset($alas) && isset($tinggi)){
                                    $luas = 0.5 * $alas * $tinggi;
                                    echo "<h4>Hasil Luas Segitiga</h4><br>
                                        Alas = $alas<br>
                                        Tinggi = $tinggi<br>
                                        Luas = $luas";
                                }
                            }
                        ?>
                        </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>