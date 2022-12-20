<?php
function lihat()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "busharyanto2";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_POST['temukan'];
    $sql = "SELECT kode_penjualan, id_penumpang, kode_tujuan, kode_tiket, waktu_penjualan, biaya FROM data_penjualan WHERE id_penumpang = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo "<table border='0'>";
        // echo "<th colspan='7'><center>DAFTAR CALON PENUMPANG</center></th>";
        echo "<center>";
        echo "<tr>";
        echo "<th><b>Kode Penjualan</b></th>";
        echo "<th><b>Id Penumpang</b></t></th>";
        echo "<th><b>Kode Tujuan</b></t></th>";
        echo "<th><b>Kode Tiket</b></t></th>";
        echo "<th><b>Waktu Penjualan</b></t></th>";
        echo "<th><b>Biaya</b></t></th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['kode_penjualan'] . "</td>";
            echo "<td>" . $row['id_penumpang'] . "</td>";
            echo "<td>" . $row['kode_tujuan'] . "</td>";
            echo "<td>" . $row['kode_tiket'] . "</td>";
            echo "<td>" . $row['waktu_penjualan'] . "</td>";
            echo "<td>" . $row['biaya'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<//center>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
}


function delete()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "busharyanto2";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to delete a record
    $sql = "DELETE FROM calon_penumpang WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="cari.css">
    <style>
    th {
        padding-left: 40px;
        padding-right: 40px;
        font-size: 18px;
        background-color: #393E46;
        color: white;
        text-align: left;
    }


    td {
        padding-left: 5px;
        padding-right: 5px;
        font-size: 20px;
        background-color: #F3EFE0;
        text-align: center;
    }


    table {
        padding-left: 40px;
        padding-right: 40px;
        margin-left: 20rem;
        margin-top: 5rem;
    }

    #dell {
        padding-right: 10px;
        padding-left: 10px;
    }
    </style>

</head>

<body>

    <!-- Bagian NavBar -->

    <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php" id="navbarNav">
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
                            <a class="nav-link" aria-current="page"
                                href="../DaftarLaporanPemesanan/LaporanPemesanan.php"> Laporan </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="Konten">
        <!-- Bagian Judul -->
        <div id="Judul">
            <h2>Hasil Pencarian Tiket</h2>
        </div>
        <br><br>

      
            <?php if(isset($_POST['cari'])){ ?>
            <?php
    include"../KoneksiDB.php";

    $id = $_POST['cari_id'];
    $cari = "SELECT * FROM calon_penumpang WHERE nama_penumpang LIKE '$id%'";

    $result = mysqli_query($conn, $cari);
?>

            <?php if (mysqli_num_rows($result) > 0) { ?>

            <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
            <?php include"../KoneksiDB.php"; ?>
            <?php $sql = "SELECT id_penumpang, nama_penumpang, no_telpon FROM calon_penumpang WHERE nama_penumpang LIKE '$id%'" ; ?>
            <?php  $result = mysqli_query($conn, $sql); ?>  
            <center>
            <center class='table'>
                <table border='1'>
                    <th colspan='3'>
                    </th>

                    <tr>
                        <th><b>Id Penumpang</b></th>
                        <th><b>Nama Penumpang</b></th>
                        <th><b>No Telpon</b></th>
                        <!-- <th><b>Delete</b></th>
                        <th><b>Lihat</b></th> -->
                    </tr>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                    <?php foreach ($result as $value) { ?>
                    <tr>
                        <td><?= $value['id_penumpang']; ?></td>
                        <td><?= $value['nama_penumpang']; ?></td>
                        <td><?= $value['no_telpon']; ?></td>
                    </tr>
                </table>
            </center>

                <?php } ?>

                <?php }else{ ?>
                    
                echo '<script language="javascript">
                swal("Opss!", "Data Anda tidak ditemukan, Mohon Periksa Kembali!", "error").then(() => {
                    window.location = "../DaftarLaporanPemesanan/LaporanPemesanan.php";
                });
                </script>'
                <?php } ?>


                <?php } ?>
                <?php mysqli_close($conn); ?>
                <?php } ?>
                <?php } ?>
          


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
                integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
                crossorigin="anonymous">
            </script>
</body>

</html>