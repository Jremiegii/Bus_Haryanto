<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php if(isset($_POST['daftar'])) ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busharyanto2";
?>

<?php $conn = mysqli_connect($servername, $username, $password, $dbname); ?> 

<?php if (!$conn): ?> 
<?php die("Connection failed: " . mysqli_connect_error()); ?> 
<?php else: ?>

<?php $nama = $_POST['namaAgen']; ?> 
<?php $noTel = $_POST['noTelp']; ?>
<?php $email = $_POST['email']; ?>
<?php $alamat = $_POST['alamat']; ?>
<?php $id = $_POST['idPengguna']; ?>

<?php $sandi = $_POST['password']; ?>
<?php $confirmPassword = $_POST['confirmPassword']; ?>

<?php $sql = "INSERT INTO agen (id_pengguna, no_perusahaan, nama_agen, no_telpon, alamat_agen, email, sandi)
VALUES ('$id','36496062', '$nama', '$noTel', '$alamat', '$email', '$sandi')"; ?>


<?php if (mysqli_query($conn, $sql)): ?> 
<?php if($sandi == $confirmPassword): ?>
    <script>
    swal ( "Hooray!!!" ,  "New record created successfully. Please Login Again..." ,  "success" );
    </script>

<?php else: ?> 
    <script>
    swal ( "Ooops!!!" ,  "Please check your data again" ,  "error" );
    </script>
<?php endif; ?>
<?php else: ?> 
<?php  echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?> 

<?php endif; ?>
<?php endif; ?>

<?php mysqli_close($conn); ?> 

</body>
</html>