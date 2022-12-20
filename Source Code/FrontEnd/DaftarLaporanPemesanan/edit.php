<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>

<body>
    <?php if(isset($_POST['edit'])){ ?>
    <?php
                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "busharyanto2";

                // // Create connection
                // $conn = mysqli_connect($servername, $username, $password, $dbname);
                // // Check connection
                // if (!$conn) {
                //     die("Connection failed: " . mysqli_connect_error());
                // }
                include "../KoneksiDB.php";

                $id = $_POST['id_penumpang'];
                $nama= $_POST['nama_penumpang'];
                $no = $_POST['no_telpon'];
                $sql = "UPDATE calon_penumpang SET nama_penumpang='$nama', no_telp_penumpang='$no'
                WHERE id_penumpang='$id'";
                if (mysqli_query($conn, $sql)) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>