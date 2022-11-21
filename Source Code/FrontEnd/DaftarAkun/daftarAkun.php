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
    <link rel="stylesheet" href="DaftarAkun.css">

    <title>Daftar Akun</title>
  </head>
  <!-- Masih error DiBagian Icon -->
  <body>
   
    <!-- Bagian NavBar -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <!--fixed-top-->

      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" id="navbarNav">
            <img src="Logo2.png" alt="Logo" width="200px" heigth="200px">
          </a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Bagian Konten -->
 <form action="DatabaseAgen.php" method="POST">
    <div id="Konten">
      <div class="container-fluid text-center">
        <div class="row"> 
          <div class="col-12">
          <img src="profilePicture.png" alt="Logo" width="100px" heigth="100px">
          </div>
          <div class="col-6">
            <div class="row g-3">
              <div class="col-2">
                <label for="inputNama" class="col-form-label">Nama</label>
                <div class="col-auto">
                <input type="text" id="inputNama" class="form-control">
              </div>
              </div>
            </div>

            <!-- bagian no telpon -->
            <div class="row g-3">
              <div class="col-2">
                <label for="inputNoTelpon" class="col-form-label">No Telpon</label>
                <div class="col-auto">
                <input type="text" id="inputNoTelpon" class="form-control">
              </div>
              </div>
            </div>

            <!-- bagian email -->
            <div class="row g-3">
              <div class="col-2">
                <label for="inputEmail" class="col-form-label">Email</label>
                <div class="col-auto">
                <input type="text" id="inputEmail" class="form-control">
              </div>
              </div>
            </div>

          <!-- bagian alamat -->
            <div class="row g-3">
              <div class="col-2">
                <label for="inputAlamat" class="col-form-label">Alamat</label>
                <div class="col-auto">
                <input type="text" id="inputAlamat" class="form-control">
              </div>
              </div>
            </div>

          </div>

         <!-- bagian id pengguna -->
          <div class="col-6">
            <div class="row g-3">
              <div class="col-3">
                <label for="inputIdPengguna" class="col-form-label">Id Pengguna</label>
                <div class="col-auto">
                <input type="text" id="inputIdPengguna" class="form-control">
              </div>
              </div>
            </div>

            <!-- bagian no perusahaan -->
            <div class="row g-3">
              <div class="col-3">
                <label for="inputNoPerusahaan" class="col-form-label">No Perusahaan</label>
                <div class="col-auto">
                <input type="text" id="inputNoPerusahaan" class="form-control">
              </div>
              </div>
            </div>

            <!-- bagian kata sandi -->
            <div class="row g-3">
              <div class="col-3">
                <label for="inputKataSandi" class="col-form-label">Kata Sandi</label>
                <div class="col-auto">
                <input type="text" id="inputKataSandi" class="form-control">
              </div>
              </div>
            </div>

            <!-- bagian konfirmasi kata sandi -->
            <div class="row g-3">
              <div class="col-4">
                <label for="inputKonfirmasiSandi" class="col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-auto">
                <input type="text" id="inputKonfirmasiSandi" class="form-control">
              </div>
              </div>
            </div>

          </div>
  </body>

</html>
