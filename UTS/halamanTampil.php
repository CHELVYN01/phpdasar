<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<body>
    <h1>Tampilkan Pesanan</h1>
    <?php
    echo $_POST['nama'];
    echo "<br>";
    echo "<br>Makanan <br>";
    $makan = $_POST['makan'];
    $minum = $_POST['minum'];
    foreach ($makan as $m => $data) {
        echo $m + 1, ".";
        echo $data, "<br>";
    }
    echo "<br>Minuman<br>";
    foreach ($minum as $n => $data2) {
        echo $n + 1, ".";
        echo $data2, "<br>";
    }
    echo "<a href ='halamanInput.php'>Kembali</a>";
    ?>
    <!-- <a href="latihanInput.php">Kembali</a> -->

</body>

</html>