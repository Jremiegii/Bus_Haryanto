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
        <link rel="stylesheet" href="PencarianDitemukan.css">
        <title>Hasil Pencarain Tiket</title>
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
            <!-- Bagian Tabel Data -->
            <center>
                
                <?php

                include "../KoneksiDB.php";
                
                $Asal = $_POST["Asal"];
                $Tujuan = $_POST["Tujuan"];
                $Waktu = $_POST["Waktu"];
                $sql = "SELECT * FROM tiket_tujuan WHERE asal_keberangkatan = '$Asal' 
                        and tujuan_keberangkatan = '$Tujuan' and waktu_operasional = '$Waktu' 
                        Order By jam_operasional Asc";
                $result = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($result);
                if($check > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='container'>";
                        echo "<div class='row justify-content-center' id='DataTiket'>";
                                echo "<div class='col-3' id='LatarLokasi'>";
                                    echo "<td><h4 id='Lokasi'><i class='fa fa-location-arrow' aria-hidden='true'> $Asal </i></h4></td>";
                                    echo "<td><h4 id='Lokasi'><i class='fa fa-map-marker' aria-hidden='true'> $Tujuan </i></h4></td>";
                                echo "</div>";
                                echo "<div class='col-5' id='LatarWaktu'>";
                                    echo "<td><h4 id='Waktu'>" .$row['harga_tiket']. "</h4></td>";
                                    echo "<td>";
                                        echo "<a href='../DataPengguna/DataPengguna.php' class='btn btn-warning btn-lg' tabindex='-1' role='button' id='TombolBeli'>
                                            Beli
                                        </a>";
                                    echo "</td>";
                                echo "</div>";
                                echo "<div class='col-4' id='LatarWaktu'>";
                                    echo "<td><h4 id='Waktu'>" .$row['jam_operasional']. "</h4></td>";
                                    echo "<td><h4 id='Waktu'>$Waktu</h4></td>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        echo "<br>";
                    }
                } else {
                    echo("<script>window.location ='../PencarianTidakDitemukan/PencarianTidakDitemukan.php' </script>");
                }

                mysqli_close($conn);
                
                ?>
            </center>
        </div>
    </body>
</html>
