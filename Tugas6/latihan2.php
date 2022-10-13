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
    $nim = ["101", "102", "103", "104", "105"];
    echo "<h1> Daftar No Induk Mahasiswa</h1>";
    echo "<ol>";
    foreach ($nim as $n) {
        echo "<li><a href='./latihan2a.php?nim=$n'>$n</a>";
    }
    echo "<ol>";
    ?>
</body>

</html>