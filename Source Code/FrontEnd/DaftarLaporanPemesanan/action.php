<?php
        function lihat(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "busharyanto2";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $id = $_POST['temukan'];
        $sql = "SELECT kode_penjualan, id_penumpang, kode_tujuan, kode_tiket, waktu_penjualan, biaya FROM data_penjualan WHERE id_penumpang = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table'>";
            echo "<table border='0'>";
            // echo "<th colspan='7'><center>DAFTAR CALON PENUMPANG</center></th>";
            echo "<center>";
            echo "<tr>";
            echo "<th><b>Kode Penjualan</b></th>";
            echo "<th><b>Id Penumpang</b></t></th>";
            echo "<th><b>Kode Tujuan</b></t></th>";
            echo "<th><b>Kode Tiket</b></t></th>";
            echo "<th><b>Waktu Penjualan</b></t></th>";
            echo "<th><b>Biaya</b></t></th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['kode_penjualan'] . "</td>";
                echo "<td>" . $row['id_penumpang'] . "</td>";
                echo "<td>" . $row['kode_tujuan'] . "</td>";
                echo "<td>" . $row['kode_tiket'] . "</td>";
                echo "<td>" . $row['waktu_penjualan'] . "</td>";
                echo "<td>" . $row['biaya'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<//center>";
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    }


    function delete(){
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

// sql to delete a record
$sql = "DELETE FROM calon_penumpang WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <style>
    body {
        align-items: center;

    }

    th {
        padding-left: 0pt;
        padding-right: 0pt;
        font-size: 18px;
        background-color: #393E46;
        color: white;
        text-align: center;
    }


    td {
        font-size: 14px;
        background-color: #F3EFE0;
        text-align: center;
    }

    th {
        text-align: left;
    }

    table {

        padding-left: 2pt;
    }
    </style>

</head>

<body>
    <?php if(isset($_POST['lihat'])): ?>
    <!-- Button trigger modal -->
    <center>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cek Data Anda
        </button>
    </center>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Penumpang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php lihat(); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <?php if(isset($_POST['delete'])): ?>
    <form class="row g-3">
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
    </form>
    <?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "busharyanto2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM calon_penumpang WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

    <?php endif; ?>
    <?php endif; ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>