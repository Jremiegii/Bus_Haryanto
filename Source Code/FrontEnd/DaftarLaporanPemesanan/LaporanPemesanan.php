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
    <link rel="stylesheet" href="LaporanPemesanan.css">
    <title>Laporan Pemesanan</title>
</head>
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
    border: 1px;
    padding-left: 40px;
    padding-right: 40px;
}

#dell {
    padding-right: 10px;
    padding-left: 10px;
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" aria-current="page"
                                href="../DaftarRiwayatLaporan/DaftarRiwayatLaporan.html"> Laporan </a>
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
          
           
            <form action="cari.php" method="POST">
            <div class="row g-3 justify-content-center container-fluid">
                <!-- Bagian Input Peancarian Data -->
                <div class="col-6 col-sm-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"
                                aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="cari_id" placeholder="Masukkan Nama Penumpang"
                            aria-label="Temukan" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- Bagian Tombol Cari -->
                <div class="col-6 col-sm-2">
                    <button type="submit" name="cari" class="btn btn-warning btn-lg" tabindex="-1">Cari</button>
                </div>
            </div>
            </form>

            <br>


            <?php
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

            $sql = "SELECT id_penumpang, nama_penumpang, no_telpon FROM calon_penumpang";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
            ?>

            <table class='table'>
                <table border='1'>
                    <th colspan='7'>
                        <center>DAFTAR CALON PENUMPANG</center>
                    </th>

                    <tr>
                        <th><b>Id Penumpang</b></th>
                        <th><b>Nama Penumpang</b></th>
                        <th><b>No Telpon</b></th>
                        <th colspan='3'>
                            <center><b>Action</b></center>
                        </th>
                        <!-- <th><b>Delete</b></th>
                        <th><b>Lihat</b></th> -->
                    </tr>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                    <?php foreach ($result as $value) { ?>
                    <tr>
                        <td><?= $value['id_penumpang']; ?></td>
                        <td><?= $value['nama_penumpang']; ?></td>
                        <td><?= $value['no_telpon']; ?></td>
                        <td class="edit"><button type='button' class='btn btn-warning btn-sm' data-bs-toggle="modal"
                                data-bs-target="#edit_<?= $value['id_penumpang']; ?>">Edit</button>
                        </td>
                        <td class="dell"><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#delete_<?= $value['id_penumpang']; ?>">Delete</button></td>
                        <td class="lihat"><button type=" button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                data-bs-target="#lihat_<?= $value['id_penumpang']; ?>">Lihat</button></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>

                </table>


                <!-- untuk nampilin modal detail penumpang -->
                <?php
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

                $sql = "SELECT kode_penjualan, id_penumpang, kode_tujuan, kode_tiket, waktu_penjualan, biaya FROM data_penjualan";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                ?>
                <?php foreach ($result as $dataModal) { ?>
                <!-- Modal -->
                <div class="modal fade" id="lihat_<?= $dataModal['id_penumpang']; ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Penumpang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <table class='table'>
                                    <table border='0'>
                                        <th colspan='7'>
                                            <center>DAFTAR CALON PENUMPANG</center>
                                        </th>
                                        <center>
                                            <tr>
                                                <th>
                                                    <b>Kode Penjualan</b>
                                                </th>
                                                <th>
                                                    <b>Id Penumpang</b>
                                                </th>

                                                <th>
                                                    <b>Kode Tujuan</b>
                                                </th>
                                                <th>
                                                    <b>Kode Tiket</b>
                                                </th>
                                                <th>
                                                    <b>Waktu Penjualan</b>
                                                </th>
                                                <th>
                                                    <b>Biaya</b>
                                                </th>
                                            </tr>

                                            <tr>
                                                <td><?= $dataModal['kode_penjualan']; ?></td>
                                                <td><?= $dataModal['id_penumpang']; ?></td>
                                                <td><?= $dataModal['kode_tujuan']; ?></td>
                                                <td><?= $dataModal['kode_tiket']; ?></td>
                                                <td><?= $dataModal['waktu_penjualan']; ?></td>
                                                <td><?= $dataModal['biaya']; ?></td>
                                            </tr>

                                    </table>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>



                <!-- untuk menghapus data -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "busharyanto2";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT id_penumpang FROM calon_penumpang";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                ?>

                <?php foreach ($result as $dell) { ?>
                <div class="modal fade" id="delete_<?= $dell['id_penumpang']; ?>" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">HAPUS</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin akan menghapus data dari id = <?= $dell['id_penumpang']; ?>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                    data-bs-toggle="modal">Yakin</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Konfirmasi Hapus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Silahkan masukkan Id Penumpang kembali, untuk konfirmasi..
                                <div class="modal-body">
                                    <form action="hapus.php" method="POST">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <label for="inputData" name="id_penumpang" class="col-form-label">Id
                                                    Penumpang</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" name="id_penumpang" id="inputData"
                                                    class="form-control">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="dell" class="btn btn-danger"
                                    data-bs-target="hapus.php">Ya</button>
                                </form>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Vertically centered scrollable modal -->
                <!-- Button trigger modal -->

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "busharyanto2";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT id_penumpang FROM calon_penumpang";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                ?>
                
                <?php foreach ($result as $edit) { ?>
                <!-- Modal -->
                <div class="modal fade" id="edit_<?= $edit['id_penumpang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="edit.php" method="POST">
                                    <div class="mb-3">
                                        <label for="inputId" class="form-label">Masukkan Id
                                            Penumpang</label>

                                        <input type="text" name="id_penumpang" id="inputId" class="form-control">

                                    </div>
                                    <div class="mb-3">
                                        <label for="inputNama" class="form-label">Masukkan Nama
                                            Penumpang</label>

                                        <input type="text" name="nama_penumpang" id="inputNama" class="form-control">

                                    </div>

                                    <div class="mb-3">
                                        <label for="inputNo" class="form-label">Masukkan No
                                            Telpon</label>

                                        <input type="text" name="no_telpon" id="inputNo" class="form-control">

                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="edit" class="btn btn-success" data-bs-target="edit.php">Edit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                    <?php } ?>




        </center>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>