<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Import Framework Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Import Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@200;300&display=swap" rel="stylesheet">
        <!-- Import Icon dari Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- File Style CSS -->
        <link rel="stylesheet" href="PencariaanTidakDitemukan.css">
        <title>Tiket Tidak Ditemukan</title>
    </head>
    <body>

        <!-- Bagian NavBar -->
          
        <div>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html" id="navbarNav">
                <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" aria-current="page" href="../DaftarLaporanPemesanan/LaporanPemesanan.php"> Laporan </a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>

        <!-- Bagian Konten -->

        <div id="Konten">
            <div id="Notifikasi">
                <h1>Ups....</h1>
                <h1><i class="fa fa-search" aria-hidden="true">
                </i>Hasil Pencarian Tidak Ditemukan!</h1>
            </div>
        </div>

    </body>
</html>
