<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasbor</title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <!-- Import Framework Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Import Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@200;300&display=swap" rel="stylesheet">
  <!-- Import Icon dari Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Dasbor.css">


</head>

<body>

  <!-- Bagian NavBar -->

  <div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../Dasbor/Dasbor.php" id="navbarNav">
          <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../Dasbor/Dasbor.php"> Dasbor </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../CariTiket/CariTiket.php"> Tiket </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../DaftarRiwayatLaporan/DaftarRiwayatLaporan.html"> Laporan </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Bagian Konten -->

  <!-- Bagian Profil & Logout -->
  <div id="Konten">
    <div class="container-fluid">
      <!-- Bagian Akun -->
      <div class="container">
        <div class="row">
          <!-- Bagian Profil -->
          <div id="KolomAgen" class="col">
            <img src="../Img/Foto Profil.png" alt="Logo" width="100px" heigth="100px">
            <!-- <img src="../Img/Foto Profil.png" alt="Logo" width="100px" height="100px"> -->
            <div id="judul" class="judul pt-4">
              <h1>Agen</h1>
            </div>
            <div class="col">
              <!-- Bagian Icon Keluar -->
              <a class="nav-link enabled" href="SignOut/SignOut.html" id="IconKeluar">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

        <br><br><br>

        <!-- Bagian Coursol/Bagian Gambar Yang Bisa Di Skip -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <!-- Courser Pertama -->
            <div class="carousel-item active">
              <!-- Bagian Gambar -->
              <img src="../Img/bus bus.png" class="d-block w-100" alt="Gambar Bus Haryanto">
              <div class="carousel-caption d-none d-md-block">
                <!-- Bagian Deskripsi -->
                <h5>Bus Haryanto Kini Hadir Bersama Mu Mejelajahi Negeri!</h5>
                <!-- Bagian Tombol Temukan Tiket -->
                <a href="../CariTiket/CariTiket.html" class="btn btn-lg" tabindex="-1" role="button" id="TombolTiket">
                  Temukan Tiket
                </a>
              </div>
            </div>
            <!-- Courser Kedua -->
            <div class="carousel-item">
              <!-- Bagian Gambar -->
              <img src="../Img/Bus1.png" class="d-block w-100" alt="Gambar Bus Haryanto">
              <div class="carousel-caption d-none d-md-block">
                <!-- Bagian Deskripsi -->
                <h5>Jelajahi Penjuru Negeri Bersama Kami, Bus Haryanto!</h5>
                <!-- Bagian Tombol Temukan Tiket -->
                <a href="../CariTiket/CariTiket.html" class="btn btn-lg" tabindex="-1" role="button" id="TombolTiket">
                  Temukan Tiket
                </a>
              </div>
            </div>
            <!-- Courser Ketiga -->
            <div class="carousel-item">
              <!-- Bagian Gambar -->
              <img src="../Img/Bus3.jpg" class="d-block w-100" alt="Gambar Bus Haryanto">
              <div class="carousel-caption d-none d-md-block">
                <!-- Bagian Deskripsi -->
                <h5>Nikmati Liburanmu & Rasakan Kenyamanan Disetiap Perjalanan</h5>
                <!-- Bagian Tombol Temukan Tiket -->
                <a href="../CariTiket/CariTiket.html" class="btn btn-lg" tabindex="-1" role="button" id="TombolTiket">
                  Temukan Tiket
                </a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <br><br><br>

        <!-- Bagian Alamat Dan Media Sosial -->
        <div class="row mt-5">
          <div class="container-fluid">
            <div id="DataAlamatMedsos">
              <center>
                <!-- Bagian Alamat -->
                <div class="row">
                  <div class="col-6" id="LokasiMedsos">
                    <h5>Jl. Raya Solo-Jogja,</h5>
                    <h5>Delanggu, Klaten</h5>
                    <!-- <i class="fa fa-map-marker" aria-hidden="true" id="IconLocation"></i> -->
                  </div>
                  <div class="col-6" id="LokasiMedsos">
                    <!-- Bagian Media Sosial -->
                    <h5>Temukan Kami: </h5>
                    <i class="fa fa-instagram" aria-hidden="true" id="IconMedsos"></i>
                    <i class="fa fa-facebook-official" aria-hidden="true" id="IconMedsos"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true" id="IconMedsos"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true" id="IconMedsos"></i>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>