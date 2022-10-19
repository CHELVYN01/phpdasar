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
    $daftarHobi = [
        "Sepakbola",
        "Renang",
        "Nonton Bioskop",
        "Main Game",
        "Shoopping"
    ];
    echo "<h1> DAFTAR HOBI </h1>";
    echo "<form action = 'latihan3a.php' method = 'POST' >";
    foreach ($daftarHobi as $dh) {
        echo "<input name = 'hobi[]' value = '$dh' type = 'checkbox'/>$dh";
        echo "<br>";
    }
    echo "<input type= 'submit'/>";
    echo "</form>";
    ?>
</body>

</html>