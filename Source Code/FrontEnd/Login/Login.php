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
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300&family=Merriweather:wght@300&family=Metal+Mania&display=swap"
        rel="stylesheet">
    <!-- Import Icon dari Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- File Style CSS -->
    <link rel="stylesheet" href="Login.css">

    <title>Login</title>

    
</head>

<body>

    <!-- Bagian NavBar -->
    <form action="cekLogin.php" method="POST">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="navbarNav">
                    <img src="../Img/Logo.png" alt="Logo" width="200px" heigth="200px">
                </a>
            </div>
        </nav>
    </div>


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busharyanto2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

    <!-- Bagian Konten -->

    <div id="Konten">
        <!-- Bagian Input Perihal Kata Sandi-->
        <center>
            <div id="Data">
                <!-- Bagian Judul -->
                <h1 id="Judul">Login</h1>
                <!-- Bagian Form Masukan Id Pengguna -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputId" id="floatingPassword" placeholder="Pengguna">
                    <label for="floatingPassword" id="KeteranganInput">
                        <i class="fa fa-id-card" aria-hidden="true"></i> Pengguna
                    </label>
                </div>
                <!-- Bagian Form Masukan Kata Sandi -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="inputPassword" id="floatingPassword" placeholder="Kata Sandi">
                    <label for="floatingPassword" id="KeteranganInput">
                        <i class="fa fa-key" aria-hidden="true"></i> Kata Sandi
                    </label>
                </div>
                <!-- Bagian Tombol Krim -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" id="TombolSubmit">MASUK</button>
                </div>
                <br><br><br><br>
                <div>
                    <!-- Bagian Lupa Kata Sandi -->
                    <a href="../GantiSandi/GantiSandi.php" id="LupaKataSandi">Lupa Kata Sandi?</a>
                    <br>
                    <!-- Bagian Icon ganti Sandi Baru -->
                    <a href="../DaftarAkun/daftarAkun.html" class="btn btn-warning btn-lg" tabindex="-1" role="button"
                        id="DaftarAkun">
                        Buat Akun Baru
                    </a>
                </div>
            </div>
        </center>
    </div>
    <script src="Login.js">
    var placeHolderText = {
        "id_agen": "Masukkan id Anda",
        "sandi": "Masukkan Sandi"
    };

    $("#selectionType").on("change", function() {
        // var selection = document.getElementById("selectionType");
        var inputBox = document.getElementById("inputBox");
        var selectedVal = $("#selectionType").find(':selected').text();
        if (placeHolderText[selectedVal] != undefined) {
            inputBox.placeHolder = placeholderText[selectedVal];
        }
    });
    </script>
    </form>
</body>

</html>