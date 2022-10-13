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

    $hari = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];
    echo "<table border = 1>";
    foreach ($hari as $i => $data) {
        echo "<tr>";
        echo "<td>hari ke-", $i + 1;
        echo "<td>$data";
    }

    // for ($j = 0; $j < count($hari); $j++) {
    //     echo "<tr>";
    //     // for ($i = 1; $i <= 1; $i++) {
    //     echo "<td>hari ke-", $j + 1;
    //     echo "<td>$hari[$j]";
    //     // }
    // }
    echo "</td>";
    ?>

</body>

</html>