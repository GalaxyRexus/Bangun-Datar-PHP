<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Custom style untuk mengatur tampilan card */
    .card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Bangun Datar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Beranda.php">Home</a>
        </li>
        <li class="nav-item">
          <form action="pilih.php" method="post">
          </form>

        </li>
      </ul>

    </div>
  </div>
</nav>
  <h4 class="text-center">Daftar Bangun Datar</h1>  
<div class="container mt-4">
  <div class="row">
    <!-- Card Segitiga -->
    <div class="col-lg-3 col-12">
      <div class="card">
        <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/04/27/2008777398.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Segitiga</h5>
          <p class="card-text">Segitiga merupakan jenis poligon dengan tiga sisi. Segitiga memiliki titik sudut yang diambil dari dua sisi. Kedua sisi ini dihubungkan dari ujung ke ujung sehingga sudut terbentuk di antara dua sisi.</p>
          <a href="Luas Segitiga.php" class="btn btn-primary">Pergi</a>
        </div>
      </div>
    </div>
    <!-- Card Persegi Panjang -->
    <div class="col-lg-3 col-12">
      <div class="card">
        <img src="https://image.popmama.com/content-images/post/20211016/persegi-panjangjpg-e4525a1b6b43aa4058ee5c26c7d77c3c.jpg?width=600&height=auto" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Persegi Panjang</h5>
          <p class="card-text">Persegi panjang adalah sebuah bentuk geometri dengan empat sudut yang sama besar (siku-siku). Dua pasangan sisi yang berseberangan memiliki panjang yang sama, sehingga sisi-sisinya terdiri dari dua pasang sisi yang sejajar dan sama panjang.</p>
          <a href="#" class="btn btn-primary">Pergi</a>
        </div>
      </div>
    </div>
    <!-- Card Trapesium -->
    <div class="col-lg-3 col-12">
      <div class="card">
        <img src="https://asset.kompas.com/crops/yXi9XRFFVBBRd22q4oYYxjVI8Io=/23x53:1748x1203/750x500/data/photo/2022/01/15/61e2a24016496.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trapesium</h5>
          <p class="card-text">Trapesium adalah poligon dengan empat sisi, di mana sepasang sisi yang berlawanan tidak selalu sejajar. Salah satu pasang sisi yang berlawanan disebut sebagai "sisi sejajar," sementara sisi yang lain disebut "sisi non-sejajar."</p>
          <a href="#" class="btn btn-primary">Pergi</a>
        </div>
      </div>
    </div>
    <!-- Card Jajar Genjang -->
    <div class="col-lg-3 col-12">
      <div class="card">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiSdqcMaUG-yhoYiSyWyaO9Bdf2eDoyANQijTnbfznjoGFZMwc2pdI0n8PcI2YdN2EFDJKL76_zKlHembtEx-vLDJJmsIadIacH7Ac6xeWlOdgZaGo41tqWQmyKIvtKmAN7d6g_-qsja-Q/s1600/Gambar+jajar+genjang.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jajar Genjang</h5>
          <p class="card-text">Jajar genjang adalah poligon dengan empat sisi yang berbentuk segi empat dengan dua pasang sisi yang sejajar. Sisi yang sejajar memiliki panjang yang sama dan sudut di antara sisi-sisi tersebut juga sama besar."</p>
          <a href="#" class="btn btn-primary">Pergi</a>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="bg-dark text-white text-center py-3 mt-5">
  <div class="container">
    <p class="mb-0">© Cendy Alviano 2024 - All rights reserved</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
