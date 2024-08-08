<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Menambahkan animasi transisi pada navbar */
    .navbar-nav .nav-link,
    .navbar-nav .nav-link.active {
      transition: background-color 0.3s ease;
    }

    /* Menambahkan warna latar belakang saat hover pada opsi navbar */
    .navbar-nav .nav-link:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Website Menghitung Luas Bangun Datar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pilih.php">--> Bangun Datar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <!-- Bagian untuk penjelasan -->
      <div class="col-md-14">
        <h1>Selamat datang di Website Menghitung Luas Bangun Datar</h1>
        <p>Website ini menyediakan penjelasan tentang berbagai bangun datar dan cara menghitung luasnya. Bangun datar merupakan bentuk geometris dua dimensi yang memiliki berbagai sifat dan karakteristik unik.</p>
        <p>Tujuan utama dari pembuatan website ini adalah untuk menyediakan sumber daya yang mudah diakses dan dipahami bagi siapa pun yang tertarik mempelajari geometri bangun datar. Dengan penjelasan yang jelas dan terperinci, diharapkan pengguna dapat memahami dengan lebih baik sifat-sifat dan aplikasi dari berbagai bangun datar, serta meningkatkan pemahaman mereka tentang matematika secara umum.</p>
        <p>Selain itu, kami juga menyediakan penjelasan singkat tentang konsep dasar di balik perhitungan luas bangun datar, sehingga pengguna dapat memahami proses perhitungan dengan lebih baik. Kami selalu berusaha untuk menyediakan pengalaman pengguna yang intuitif dan bermanfaat, sehingga setiap orang dapat mengakses alat kalkulator kami dengan mudah dari perangkat apa pun, kapan pun dibutuhkan.</p>
        <p>Jadi, apakah Anda mencari alat untuk menghitung luas sebuah ruangan, mengukur lahan untuk proyek konstruksi, atau hanya ingin mengasah keterampilan matematika Anda, kami siap membantu Anda. Kunjungi Website Menghitung Luas Bangun Datar sekarang juga dan mulailah menghitung dengan mudah dan cepat!</p>
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
