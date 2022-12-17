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
        <!-- Import SweetAlert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="DaftarAkun.css">
        <title>Daftar Akun</title>
    </head>

    <body>

        <!-- Bagian NavBar -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" id="navbarNav">
                        <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
                    </a>
                </div>
            </nav>
        </div>

        <br>

        <!-- Bagian Konten -->
        <div id="Konten">
            <center>
                <div id="Data">
                    <div class="container-fluid">
                        <form action="#" method="POST">
                            <!-- Bagian Button Upload Profil -->
                            <div>
                                <img src="../Img/Foto Profil.png" alt="Logo" width="100px" heigth="100px">
                            </div>
                            <!-- Bagian Input Data Diri -->
                            <div id="form">
                                <div class="row g-2">
                                    <!-- Bagian Input Nama -->
                                    <div class="col">
                                        <label for="Nama" class="form-label" id="Nama">Nama</label>
                                        <input type="text" class="form-control" name="namaAgen" placeholder="Nama"
                                            aria-label="Nama" Id="InputNama">
                                    </div>
                                    <!-- Bagian Input Id Pengguna -->
                                    <div class="col">
                                        <label for="Id Pengguna" class="form-label" id="IdPengguna">ID Pengguna</label>
                                        <input type="text" class="form-control" name="idPengguna" placeholder="Id Pengguna"
                                            aria-label="Id Pengguna" id="InputIdPengguna">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <!-- Bagian Input No Telpon -->
                                    <div class="col">
                                        <label for="No Telpon" class="form-label" id="NoTelpon">No Telpon</label>
                                        <input type="tel" class="form-control" name="noTelp" placeholder="No Telpon"
                                            aria-label="No Telpon" id="InputNoTelpon">
                                    </div>
                                    <!-- Bagian Input No Perusahaan -->
                                    <div class="col">
                                        <label for="No Perusahaan" class="form-label" id="NoPerusahaan">No
                                            Perusahaan</label>
                                        <input type="text" class="form-control" name="noPerusahaan" placeholder="36496062"
                                            disabled id="InputNoPerusahaan">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <!-- Bagian Input Email -->
                                    <div class="col">
                                        <label for="Email" class="form-label" id="Email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            aria-label="Email" id="InputEmail">
                                    </div>
                                    <!-- Bagian Input Kata Sandi -->
                                    <div class="col">
                                        <label for="Kata Sandi" class="form-label" id="KataSandi">Kata Sandi</label>
                                        <input type="password" class="form-control" name="password" placeholder="Kata Sandi"
                                            aria-label="Kata Sandi" id="InputKataSandi">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <!-- Bagian Input Alamat -->
                                    <div class="col">
                                        <label for="Alamat" class="form-label" id="Alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                            aria-label="Alamat" id="InputAlamat">
                                    </div>
                                    <!-- Bagian Input Konfirmasi Kata Sandi -->
                                    <div class="col">
                                        <label for="Konfirmasi Kata Sandi" class="form-label"
                                            id="KonfirmasiSandi">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" name="confirmPassword"
                                            placeholder="Konfirmasi Kata Sandi" aria-label="Konfirmasi Kata Sandi"
                                            id="InputKonfirmasiSandi">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!-- Bagian Button Kembali & Daftar -->
                            <div class="row g-3">
                                <!-- Bagian Button Kembali -->
                                <div class="col">
                                    <a href="../index.html" class="btn btn-warning btn-lg enable" role="button"
                                        aria-disabled="true" id="TombolKembali">
                                        Kembali
                                    </a>
                                </div>
                                <!-- Bagian Button Kembali -->
                                <div class="col">
                                    <button type="submit" class="btn btn-warning btn-lg enable" role="button"
                                        id="TombolDaftar" name="daftar">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </div>


        <?php
        
            include "../KoneksiDB.php";

            if(isset($_POST['daftar'])){
                $nama = $_POST['namaAgen'];
                $noTel = $_POST['noTelp'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $id = $_POST['idPengguna'];
                $sandi = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
    
                $sql = "INSERT INTO agen (id_agen, no_perusahaan, nama_agen, no_telp_agen, alamat_agen, email_agen, katasandi_agen)
                VALUES ('$id','36496062', '$nama', '$noTel', '$alamat', '$email', '$sandi')";

                if($sandi == $confirmPassword){
                    if($conn->query($sql) == TRUE){
                        echo '<script language="javascript">swal("Berhasil!","Selamat Anda Telah Berhasil Mendaftar!","success").then(() => { window.location ="../Login/Login.php"; });</script>';
                    } else {
                        echo '<script language="javascript">swal("Opss!","Terjadi Kesalahan. Mohon Periksa Kembali!","error").then(() => { window.location ="DaftarAkun.php"; });</script>';
                    }
                } else {
                    echo '<script language="javascript">swal("Opss!","Terjadi Kesalahan. Mohon Periksa Kembali!","error").then(() => { window.location ="DaftarAkun.php"; });</script>';
                }
            }

            mysqli_close($conn);
        
        ?>

    </body>

</html>