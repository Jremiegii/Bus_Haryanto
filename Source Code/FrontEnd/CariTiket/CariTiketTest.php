<?php

    session_start();

?>

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
      <link rel="stylesheet" href="CariTiket.css">
      <title>Cari Tiket</title>
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
                  <a class="nav-link" aria-current="page" href="../Dasbor/Dasbor.html"> Dasbor </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="CariTiket.html"> Tiket </a>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5">
            <!-- Kosong -->
          </div>
          <div class="col-sm-7">
            <div class="row">
              <!-- Bagian Timeline -->
              <div class="col-12 col-sm-12">
                <div class="Timeline">
                  <!-- Bagian Judul -->
                  <h1 class="Judul">Temukan Tiket Anda!</h1>
                  <!-- Bagian seruaan -->
                  <h3>Nikmati keseruan dalam</h3>
                  <h3>setiap perjalanan.</h3>
                </div>
              </div>
            </div>
            <!-- Bagian Form Cari Tiket -->
            <form action="PencarianDitemukan.php" method="POST">
              <div class="row">
                <!-- Bagian Input Kota Asal -->
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kota Asal" aria-label="Kota Asal" id="InputKeberangkatan" value="" name="Asal">
                </div>
                <!-- Bagian Input Kota Tujuan -->
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kota Tujuan" aria-label="Kota Tujuan" id="InputKeberangkatan" value="" name="Tujuan">
                </div>
                <!-- Bagian Input Jadwal Keberangkatan -->
                <div class="col-12">
                  <input type="date" class="form-control" placeholder="Jadwal Keberangkatan" id="InputKeberangkatan" value="" name="Waktu">
                </div>
                <!-- Bagian Tombol Cari -->
                <div class="col-12">
                  <center>
                    <button type="submit" class="btn" id="TombolSubmit" name="Kirim">Krim</button>
                  </center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
    
      // include "../KoneksiDB.php";

    //   if(isset($_POST['Kirim'])){
    //     $Asal = $_POST["Asal"];
    //     $Tujuan = $_POST["Tujuan"];
    //     $Waktu = $_POST["Waktu"];
    //     // $sql="select * from tiket_tujuan where asal_keberangkatan like '%".$Asal."%' and tujuan_keberangkatan like '%".$Tujuan."%' and waktu_operasional_bus like '%".$Waktu."%' order by waktu_operasional_bus asc";
    //     $sql = "SELECT * FROM tiket_tujuan WHERE asal_keberangkatan = '$Asal' and tujuan_keberangkatan = '$Tujuan' and waktu_operasional_bus = '$Waktu' Order By waktu_operasional_bus Asc";
    //     $result = mysqli_query($conn, $sql);
    //     $check = mysqli_num_rows($result);
    //     if($check > 0){
    //       // $getData = mysqli_fetch_array($result);
    //       $getData = mysqli_fetch_array($result);
    //       echo "Data Berhasil Tersimpan!";
    //       // header("Location: ../PencarianDitemukan/PencarianDitemukan.php");
    //       // header("Location: PencarianDitemukan");
    //     } else {
    //       echo "Data Tidak Berhasil Ditemukan!";
    //       // header("Location: ../PencariaanTidakDitemukan/PencariaanTidakDitemukan.php");
    //     }
    // }

      // if(isset($_POST['Kirim'])){
      //   $Asal = $_POST["Asal"];
      //   $Tujuan = $_POST["Tujuan"];
      //   $Waktu = $_POST["Waktu"];

      //   $sql = "SELECT * FROM tiket_tujuan WHERE asal_keberangkatan = '$Asal' 
      //           and tujuan_keberangkatan = '$Tujuan' and waktu_operasional_bus = '$Waktu' 
      //           Order By waktu_operasional_bus Asc";
      //   $result = mysqli_query($conn, $sql);

      //   if(mysqli_num_rows($result) > 0){
      //     header("Location: PencarianDitemukan");
      //   } else {
      //     header("Location: PencarianTidakDitemukan.php");
      //   }
      // }

      // mysqli_close($conn);

    //   if(isset($_POST['Kirim'])){
    //     $Asal = $_POST["Asal"];
    //     $Tujuan = $_POST["Tujuan"];
    //     $Waktu = $_POST["Waktu"];
    //     $sql = "SELECT * FROM tiket_tujuan WHERE asal_keberangkatan = '$Asal' 
    //              and tujuan_keberangkatan = '$Tujuan' and waktu_operasional_bus = '$Waktu' 
    //              Order By waktu_operasional_bus Asc";
    //     $result = mysqli_query($conn, $sql);
    //     $check = mysqli_num_rows($result);
    //     if($check > 0){
    //       header("Location: PencarianDitemukan.php");
    //     } else {
    //       header("Location: PencarianTidakDitemukan.php");
    //         // echo    "<script type='text/javascript'>
    //         //         alert('Anda gagal masuk. silahkan periksa kembali username dan password anda!')
    //         //         </script>";
    //         // echo("<script>window.location ='../PencariaanTidakDitemukan/PencariaanTidakDitemukan.php' </script>");
    //     }
    // }

    // mysqli_close($conn);


        include "../KoneksiDB.php";

        if(isset($_POST['Kirim'])){
          $Asal = $_POST["Asal"];
          $Tujuan = $_POST["Tujuan"];
          $Waktu = $_POST["Waktu"];
          $sql = "SELECT * FROM tiket_tujuan WHERE asal_keberangkatan = '$Asal' 
                  and tujuan_keberangkatan = '$Tujuan' and waktu_operasional_bus = '$Waktu' 
                  Order By waktu_operasional_bus Asc";
          $result = mysqli_query($conn, $sql);
          $check = mysqli_num_rows($result);
          if($check > 0){
            echo("<script>window.location ='PencarianDitemukan.php' </script>");
            // header("Location: PencarianDitemukan.php");
            // if(!headers_sent()){
            //   header("Location: PencarianDitemukan.php");
            // echo "Berhasil Kakak";
            // }
          } else {
            // header("Location: PencarianTidakDitemukan.php");
            // echo    "<script type='text/javascript'>
            //         alert('Anda gagal masuk. silahkan periksa kembali username dan password anda!')
            //         </script>";
              echo("<script>window.location ='../PencariaanTidakDitemukan/PencariaanTidakDitemukan.php' </script>");
          }
        }

        mysqli_close($conn);

    ?>

  </body>
</html>