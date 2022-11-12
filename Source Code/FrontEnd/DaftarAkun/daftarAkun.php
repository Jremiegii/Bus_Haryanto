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
  <link rel="stylesheet" href="DaftarAkun.css">

  <title>Daftar Akun</title>
</head>
<!-- Masih error DiBagian Icon -->

<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Bagian NavBar -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <!--fixed-top-->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.html" id="navbarNav">
              <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
            </a>
          </div>
    </div>
    </nav>
    </div>

    <!-- Bagian Konten -->

    <div id="Konten">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-5">
            <img src="../Img/profilePicture.png" alt="Logo" width="200px" heigth="200px">
          </div>
          <div class="col-7 bg-white">
            <!-- Bagian Judul -->
            <h1>Daftar Akun</h1>

            <!-- Bagian Id Pengguna -->
            <div class="form-floating mb-3 text-center">
              <input type="text" class="form-control" id="floatingIdPengguna" placeholder=" Id Pengguna">
              <label for="floatingIdPengguna" id="KeteranganInput">
                <i class="fa fa-id-badge" aria-hidden="true"></i> Id Pengguna
              </label>
            </div>

            <!-- Bagian Nama -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingNama" placeholder=" Nama">
              <label for="floatingNama" id="KeteranganInput">
                <i class="fa fa-user" aria-hidden="true"></i> Nama
              </label>
            </div>

            <!-- Bagian No. Telpon -->
            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="floatingNoTelpon" placeholder=" No Telpon">
              <label for="floatingNoTelpon" id="KeteranganInput">
                <i class="fa fa-phone" aria-hidden="true"></i> No. Telpon
              </label>
            </div>

            <!-- Bagian Email -->
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmail" placeholder=" Email">
              <label for="floatingEmail" id="KeteranganInput">
                <i class="fa fa-envelope" aria-hidden="true"></i> Email
              </label>
            </div>

            <!-- Bagian Sandi -->
            <form class="row g-3">
              <div class="col-auto">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingSandi" placeholder=" Kata Sandi">
                  <label for="floatingSandi" id="KeteranganInput">
                    <i class="fa fa-key" aria-hidden="true"></i> Kata Sandi
                  </label>
                </div>
              </div>

              <!-- Bagian Konfirmasi Sandi -->
              <div class="col-auto">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control mb-3" id="floatingKonfirmasiSandi" placeholder=" Konfirmasi Kata Sandi">
                  <label for="floatingKonfirmasiSandi" id="KeteranganInput">
                    <i class="fa fa-key" aria-hidden="true"></i> Konfirmasi Kata Sandi
                  </label>
                </div>
              </div>
            </form>

            <!-- Bagian Button Daftar -->
            <button type="button" class="btn btn-danger">Daftar</button>

          </div>
        </div>
      </div>
    </div>
  </form>




</body>

</html>

<?php
function insert()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rpl";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  $id = $_POST['idAgen'];
  $noPerusahaan = $_POST['noPerusahaan'];
  $nama = $_POST['nama'];
  $noTelpon = $_POST['noTelpon'];
  $alamat = $_POST['alamatAgen'];
  $email = $_POST['email'];
  $sandi = $_POST['kataSandi'];
  $konfirmasiSandi = $_POST['konfirmasiSandi'];

  $sql = "INSERT INTO agen (idAgen, noPerusahaan, namaAgen, noTelpon, alamatAgen, email, kataSandi,        konfirmasiKataSandi) 
  VALUES ($id, '$noPerusahaan', '$nama', $noTelpon, '$alamat', '$email', '$sandi', '$konfirmasiSandi')";
  // $sql .= "INSERT INTO pengguna (Id_Pengguna, Nama, No_Telpon, Email, Kata_Sandi, Konfirmasi_Kata_Sandi)
  // VALUES ('Mary', 'Moe', 'mary@example.com');";
  // $sql .= "INSERT INTO pengguna (Id_Pengguna, Nama, No_Telpon, Email, Kata_Sandi, Konfirmasi_Kata_Sandi)
  // VALUES ('Julie', 'Dooley', 'julie@example.com')";

  if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
</head>

<body>
  <?php
  if (isset($_POST['daftar'])) {
    insert();
  }
  ?>