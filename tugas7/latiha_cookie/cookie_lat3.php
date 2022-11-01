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
    if (isset($_COOKIE['counter'])) {
        $c = $_COOKIE['counter'];
        $c = $c + 1;
        setcookie("counter", $c);
        echo "<h1>Anda sudah mengunjungi halaman ini sebanyak", $c, "kali</h1>";
    } else {
        echo "<h1> anda sudah mengunjungi halaman ini sebanyak 1 kali </h1>";
        setcookie("counter", 0);
    }
    ?>
</body>

</html>