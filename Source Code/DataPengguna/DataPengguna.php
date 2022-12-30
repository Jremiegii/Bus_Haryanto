<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Framework Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Import Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@200;300&display=swap" rel="stylesheet">
    <!-- Import Icon dari Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Import SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- File Style CSS -->
    <link rel="stylesheet" href="DataPengguna.css" />
    <title>Identitas Pengguna</title>
  </head>

  <body>

    <div>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html" id="navbarNav">
            <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px" />
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
                <a class="nav-link" aria-current="page" href="../CariTiket/CariTiket.php">
                  Tiket
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Laporan/Laporan.php"> Laporan </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Bagian Konten -->

    <div id="Konten">
      <center>
        <div id="Data">
          <form action="" method="POST">
          <h1 id="Judul">Data Pengguna</h1>
          <br>
          <div class="row">
          <div class="mb-3">
              <label for="Nama" class="form-label" id="NoTelpon">Id Pengguna</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id Pengguna" name="IdPengguna">
            </div>
            <div class="mb-3">
              <label for="Nama" class="form-label" id="Nama">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="Nama">
            </div>
            <div class="mb-3">
              <label for="No Telpon" class="form-label" id="NoTelpon">No Telpon</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon" name="NoTelpon">
            </div>
            <!-- Bagian Tombol Krim -->
            <div class="col">
              <!-- <button type="submit" class="btn btn-primary" href="../PencarianDitemukan/PencarianDitemukan.php" id="TombolKembali" name="Kembali">Kembali</button> -->
              <a href="../PencarianDitemukan/PencarianDitemukan.php" class="btn btn-primary" id="TombolKembali">Kembali</a>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary" id="TombolKrim" name="Kirim">Bayar</button>
            </div>
          </form>
        </div>
        </center>
    </div>

    <?php
        
      include "../KoneksiDB.php";

      if(isset($_POST['Kirim'])){
        $IdPengguna = $_POST['IdPengguna'];
        $Nama = $_POST['Nama'];
        $NoTelpon = $_POST['NoTelpon'];
    
        $sql = "INSERT INTO calon_penumpang (Id_Penumpang, nama_penumpang, no_telp_penumpang)
        VALUES ('$IdPengguna', '$Nama', '$NoTelpon')";

        if($conn->query($sql) == TRUE){
          // echo '<script language="javascript">swal("Berhasil!","Selamat Anda Telah Berhasil Mendaftar!","success").then(() => { window.location ="../CariTiket/CariTiket.php"; });</script>';
          echo '<script language="javascript">
                    swal({
                        title: "Peringatan",
                        text: "Apakah Data Anda Sudah Benar ?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }) .then((willDelete) => {
                        if (willDelete) {
                          { window.location ="../NotifikasiPembayaranBerhasil/NotifikasiPembayaranBerhasil.php"; }
                        } else {
                          { window.location ="../DataPengguna/DataPengguna.php"; }
                        }
                    });
                  </script>';
        } else {
          echo '<script language="javascript">swal("Opss!","Terjadi Kesalahan. Mohon Periksa Kembali!","error").then(() => { window.location ="DataPengguna.php"; });</script>';
        }
      }

      mysqli_close($conn);
        
    ?>

  </body>
</html>