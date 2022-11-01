<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta Seminar</title>
    <style>
        form {
            /* border: 2px solid black; */
            margin-left: 60px;
            margin-right: 100px;

        }

        .no {
            margin-left: 30px;
        }

        .status {
            position: relative;
            margin-left: 95px;
            /* margin-top: 20px; */

        }

        .label_status {
            position: absolute;
            margin-top: 30px;
        }

        .minat {
            position: relative;
            margin-left: 95px;
        }

        .label_minat {
            position: absolute;
            margin-top: 45px;
        }

        .btn {
            margin-left: 90px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_COOKIE['cooki'])) {
        $hasil = $_COOKIE['cooki'];
    }
    ?>

    <form action="Tugas2.php" method="POST">
        <h1>Pendafataran Peserta Seminar</h1>
        <br>
        <label>No Induk</label>
        <input class="no" name="noinduk" type="text"><br>
        <?php
        echo "<label class = 'label_status'> Status </label>";
        $Daftarstatus = [
            "Dosen",
            "Mahasiswa"
        ];
        echo "<br>";
        foreach ($Daftarstatus as $s) {
            echo "<input class = 'status' name = 'status[]' value = '$s' type = 'radio'/>$s";
            echo "<br>";
        }
        echo "<br>";
        echo "<label class = 'label_minat'> Minat </label>";
        $Daftarminat = [
            "Programing",
            "Database",
            "Networking",
            "Multimedia"
        ];
        echo "<br>";
        foreach ($Daftarminat as $m) {
            echo "<input class = 'minat' name = 'minat[]' value = '$m' type = 'checkbox'/>$m";
            echo "<br>";
        }
        echo "<br>";

        ?>
        <input class="btn" type="submit">

    </form>


</body>

</html>