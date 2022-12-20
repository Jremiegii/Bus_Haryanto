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
        <!-- File Style CSS -->
        <link rel="stylesheet" href="GantiSandi.css">
        <title>Ganti Kata Sandi</title>
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

        <!-- Bagian Konten -->

        <div id="Konten">
            <!-- Bagian Input Perihal Kata Sandi-->
            <center>
                <div id="Data">
                    <form action="#" method="POST">
                        <h1 id="Judul">Ganti Sandi</h1>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="idPengguna" id="floatingPassword" placeholder="Id Pengguna">
                            <label for="floatingPassword" id="KeteranganInput">
                                <i class="fa fa-id-card" aria-hidden="true"></i> Id Pengguna
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="sandiBaru" id="floatingPassword" placeholder="Kata Sandi Baru">
                            <label for="floatingPassword" id="KeteranganInput">
                                <i class="fa fa-key" aria-hidden="true"></i> Kata Sandi Baru
                        </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="konfirmSandi" id="floatingPassword" placeholder="Konfirmasi Kata Sandi Baru">
                            <label for="floatingPassword" id="KeteranganInput">
                                <i class="fa fa-key" aria-hidden="true"></i> Konfirmasi Kata Sandi Baru
                        </label>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary" name="kirim" id="TombolSubmit">KIRIM</button>
                        </div>
                    </form>
                </div>
            </center>
        </div>


        <?php
        
            include "../KoneksiDB.php";

            if(isset($_POST['kirim'])){
                $id = $_POST['idPengguna'];
                $pwdBaru = $_POST['sandiBaru'];
                $confirm = $_POST['konfirmSandi'];
            
                $sql = "UPDATE agen SET katasandi_agen='$pwdBaru' WHERE id_agen='$id'";
                
                if($pwdBaru == $confirm){
                    if($conn->query($sql) == TRUE){
                        echo '<script language="javascript">swal("Berhasil!","Anda Telah Berhasil Mengubah Kata Sandi. Silahkan Login Kembali!","success").then(() => { window.location ="../Login/Login.php"; });</script>';
                    } else {
                        echo '<script language="javascript">swal("Opss!","Terjadi Kesalahan, Mohon Periksa Kembali!","error").then(() => { window.location ="GantiSandi.php"; });</script>';
                    }
                } else {
                    echo '<script language="javascript">swal("Opss!","Terjadi Kesalahan, Mohon Periksa Kembali!","error").then(() => { window.location ="GantiSandi.php"; });</script>';
                }
            }
            
            mysqli_close($conn);
        
        ?>

    </body>
</html>