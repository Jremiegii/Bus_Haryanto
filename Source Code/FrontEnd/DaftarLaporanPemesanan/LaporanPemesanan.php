<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Framework Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Import Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@200;300&display=swap" rel="stylesheet">
    <!-- Import Icon dari Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- File Style CSS -->
    <link rel="stylesheet" href="LaporanPemesanan.css">
    <title>Laporan Pemesanan</title>
</head>
<style>
    body {

  }

  th {
    padding-left: 40px;
    padding-right: 40px;
    font-size: 20px;
    background-color: #393E46;
    color: white;
  }


  td {
    padding-left: 40px;
    padding-right: 40px;
    font-size: 20px;
    background-color: #F3EFE0;
    text-align: center;
  }

  th {
    text-align:left;
  }

  table {
    border: 1px;
  }
</style>


<body>

    <!-- Bagian NavBar -->

    <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html" id="navbarNav">
                    <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../Dasbor/Dasbor.html"> Dasbor </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../CariTiket/CariTiket.html"> Tiket </a>
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

    <div id="Konten">
        <!-- Bagian Judul -->
        <div id="Judul">
            <h2>REKAP DATA PEMESANAN TIKET</h2>
        </div>
        <br><br>

        <!-- Bagian Tabel Data -->
        <center>
            <!-- Bagian Searching Data -->
            <div class="row g-3 justify-content-center container-fluid">
                <!-- Bagian Input Peancarian Data -->
                <div class="col-6 col-sm-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Temukan" aria-label="Temukan" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- Bagian Tombol Cari -->
                <div class="col-6 col-sm-2">
                    <a href="#" class="btn btn-warning btn-lg" tabindex="-1" role="button" id="TombolCari">
                        Cari
                    </a>
                </div>
            </div>

            <br>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "busharyanto";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id_penumpang, nama_calon_penumpang, no_telpon FROM calon_penumpang";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table'>";
                echo "<table border='1'>";
                echo "<th colspan='7'><center>DAFTAR CALON PENUMPANG</center></th>";

                echo "<tr>";
                echo "<th><b>Id Penumpang</b></th>";
                echo "<th><b>Nama Penumpang</b></th>";
                echo "<th><b>No Telpon</b></th>";
                echo "<th><b>Input</b></th>";
                echo "<th><b>Edit</b></th>";
                echo "<th><b>Delete</b></th>";
                echo "<th><b>Lihat</b></th>";
                echo "</tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_penumpang'] . "</td>";
                    echo "<td>" . $row['nama_calon_penumpang'] . "</td>";
                    echo "<td>" . $row['no_telpon'] . "</td>";
                    echo "<td><button type='button' class='btn btn-link'>Input</button></td>"; 
                    echo "<td><button type='button' class='btn btn-link'>Edit</button></td>";
                    echo "<td><button type='button' class='btn btn-link'>Delete</button></td>";
                    echo "<td><button type='button' class='btn btn-link'>Lihat</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>





            <!-- 
            Bagian Tabel Data
            <div class="table-responsive" id="Data">
                <table class="table">
                    <!-- Bagian Header Table -->
            <!-- <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode Tiket</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <!-- Bagian Isi Tabel -->
            <!-- <tbody id="DataPerBaris">
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td> -->
            <!-- </tr>
                    <tr id="DataPerBaris">
                        <th scope="row">1</th>
                        <td scope="row">Sally Clorinda</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr id="DataPerBaris">
                        <th scope="row">1</th>
                        <td scope="row">Jremiegi</td>
                        <td scope="row">SG-101</td> -->
            <!-- <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr id="DataPerBaris">
                        <th scope="row">1</th>
                        <td scope="row">Fransiskus Jremiegi S</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr id="DataPerBaris">
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr> -->
            <!-- <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td> -->
            <!-- </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Sally</td>
                        <td scope="row">SG-101</td>
                        <td scope="row"><a href="#"><i class="fa fa-eye" aria-hidden="true" id="IconMata"></i></a></td>
                    </tr> -->
            <!-- </tbody> -->
            <!-- </table> -->
            <!-- </div>  -->
        </center>
    </div>

</body>

</html>