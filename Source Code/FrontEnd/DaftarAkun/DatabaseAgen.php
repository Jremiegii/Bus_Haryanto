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
</body>

</html>