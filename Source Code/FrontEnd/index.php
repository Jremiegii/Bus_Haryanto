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
    <link rel="stylesheet" href="style.css">
    <title>Selamat Datang Di Website Bus Hariyanto</title>
</head>

<body>

    <!-- Bagian NavBar -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" id="navbarNav">
                <img src="Img/Logo.png" alt="Logo" width="200px" heigth="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Login/Login.php"> Masuk </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="DaftarAkun/DaftarAkun.php"> Daftar </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>

    <!-- Bagian Konten -->

    <div id="Konten">
        <div class="container-fluid" style="height:100vh">
            <!-- Bagian Gambar Wayang -->
            <div class="row">
                <div class="col-sm-4">
                    <img src="Img/Wayang.png" alt="Wayang" class="img-fluid rounded float-end" id="GambarWayang">
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <br><br>
                            <!-- Bagian Judul -->
                            <div>
                                <h1 id="Judul">Pemesanan Tiket Bus</h1>
                                <h1 id="Judul">PO Hariyanto</h1>
                                <h1 id="Judul">Agen Delangu</h1>
                                <h3 id="Alamat">Jln Raya Delanggu No 252U</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <br><br>

            <!-- Bagian Gambar Gambar Bus -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="text-center">
                        <img src="Img/bus bus.png" class="img-fluid rounded" alt="Gambar Bus" id="GambarBus">
                    </div>
                </div>
            </div>
            <br><br>

            <!-- Bagian Deskripsi -->
            <div class="row">
                <div class="col-2 col-sm-2">
                </div>
                <div class="col-8 col-sm-8">
                    <div>
                        <p id="Deskripsi">
                            Bagikan setiap momen perjalanan dan abadikan melalui potret disetiap sudut tempat. Sekarang
                            juga!
                        </p>
                    </div>
                </div>
                <div class="col-2 col-sm-2">
                </div>
            </div>
            <br><br>




            <div>
                <!-- Bagian Copyright -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div>
                            <h3 id="Copyright">
                                <p id="demo"></p>
                                <script>
                                document.getElementById('demo').innerHTML = Date();
                                </script>
                                <!-- <button onclick="window.print()">Print this page</button> -->

                                Website Pemesanan Tiket
                                <i class="fa fa-copyright" aria-hidden="true"></i>
                                2022
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>