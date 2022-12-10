<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Ganti Sandi</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php if(isset($_POST['kirim'])): ?>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busharyanto2";
?>

    <?php $conn = mysqli_connect($servername, $username, $password, $dbname); ?>

    <?php if (!$conn): ?>
    <?php  die("Connection failed: " . mysqli_connect_error());?>
    <?php else: ?>
    <?php $id = $_POST['idPengguna']; ?>
    <?php $pwdLama = $_POST['sandiLama']; ?>
    <?php $pwdBaru = $_POST['sandiBaru']; ?>
    <?php $confirm = $_POST['konfirmSandi']; ?>

    <?php $sql = "UPDATE agen SET sandi='$pwdBaru' WHERE id_pengguna='$id'"; ?>
    <?php $sql .= "UPDATE masuk SET sandi='$pwdBaru' WHERE id_pengguna='$id'"; ?>
    
    <?php if($pwdBaru == $confirm): ?>
    <?php if($conn->query($sql) == TRUE): ?>
    <script type="text/javascript">
    swal("Hooray!!!", "Terima kasih, password anda berhasil di update. Silahkan Login Kembali", "success");
    // window.location = "../Dasbor/Dasbor.php";
    </script>
    <a href="../Login/Login.php">Kembali Login</a>
    <?php else: ?>
    <script>
    swal("Oops", "ada kesalahan pada inputan Anda", "error");

    // alert("Username dan Password Anda salah, Mohon cek kembali id agen dan password anda");
    // window.location = "../Login/Login.php";
    </script>
    <a href="../Login/Login.php">Kembali Login</a>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
    <?php mysqli_close($conn); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>