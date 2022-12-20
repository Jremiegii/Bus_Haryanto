<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
if(isset($_POST['dell'])){
  include"../KoneksiDB.php";

// sql to delete a record
$id = $_POST['id_penumpang'];
$sql = "DELETE FROM calon_penumpang WHERE id_penumpang='$id'";

if (mysqli_query($conn, $sql)) {
  echo '<script language="javascript">swal("Berhasil Hapus!","","success").then(() => { window.location ="../DaftarLaporanPemesanan/LaporanPemesanan.php"; });</script>';
} else {
  echo '<script language="javascript">swal("Opss!","Data Anda belum berhasil terhapus, Mohon Periksa Kembali!","error").then(() => { window.location ="../DaftarLaporanPemesanan/LaporanPemesanan.php"; });</script>' . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
</body>

</html>