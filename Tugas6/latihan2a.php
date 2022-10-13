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

    $ninNama = [
        "101" => "budi",
        "102" => "Sari",
        "103" => "RUdi",
        "104" => "Jimmy",
        "105" => "Rachel"
    ];
    $terpilih = $_GET["nim"];
    echo "<h1>Detail Mahasiswa</h1>";
    echo "<table border = '1'>";
    echo "<tr><td?>NIM</td><td>Nama</td></tr>";
    echo "<tr><td?>$terpilih</td><td>$ninNama[$terpilih]</td></tr>";
    echo "</table>";

    ?>
</body>

</html>