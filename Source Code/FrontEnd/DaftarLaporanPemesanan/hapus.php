<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
</head>

<body>
    <?php
      if(isset($_POST['dell'])){
      // $servername = "localhost";
      // $username = "root";
      // $password = "";
      // $dbname = "busharyanto2";

      // // Create connection
      // $conn = mysqli_connect($servername, $username, $password, $dbname);
      // // Check connection
      // if (!$conn){
      //     die("Connection failed: " . mysqli_connect_error());
      // }

      include "../KoneksiDB.php";

      // sql to delete a record
      $id = $_POST['id_penumpang'];
      $sql = "DELETE FROM calon_penumpang WHERE id_penumpang='$id'";

      if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }

      mysqli_close($conn);
      }
?>
</body>

</html>