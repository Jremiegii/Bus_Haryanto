<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <?php
    include "../KoneksiDB.php";
    ?>

    <?php if (!$conn) : ?>
        <?php die("Connection failed: " . mysqli_connect_error()); ?>
    <?php else : ?>
        <?php $id = $_POST['inputId']; ?>
        <?php $pwd = $_POST['inputPassword']; ?>
        <?php $sql = "SELECT id_agen, katasandi_agen FROM agen WHERE id_agen = '$id' AND katasandi_agen = '$pwd'"; ?>
        <?php $result = mysqli_query($conn, $sql); ?>

        <?php if (mysqli_num_rows($result) > 0) : ?>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                <script type="text/javascript">
                    swal("Hooray!!!", "Terima kasih, anda berhasil login", "success");
                    // window.location = "../Dasbor/Dasbor.php";
                </script>
                <a href="../Dasbor/Dasbor.php">Masuk Dasbor</a>
            <?php endwhile; ?>
        <?php else : ?>
            <script>
                swal("Oops", "Username dan Password Anda salah, Mohon cek kembali id agen dan password anda", "error");

                // alert("Username dan Password Anda salah, Mohon cek kembali id agen dan password anda");
                // window.location = "../Login/Login.php";
            </script>
            <a href="../Login/Login.php">Kembali Login</a>
        <?php endif; ?>

    <?php endif; ?>

    <?php mysqli_close($conn); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>