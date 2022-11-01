<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pendaftaran Berhasil</h1>
    <a href="Tugas1.php">lihat cookie</a>
</body>

</html>

<?php

$noInduk = $_POST['noinduk'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$minat = implode(", ",$_POST['minat']);
setcookie("cookie1", $noInduk);
setcookie("cookie2", $nama);
setcookie("cookie3", $status);
setcookie("cookie4", $minat);

?>