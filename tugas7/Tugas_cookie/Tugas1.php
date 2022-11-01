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

        .nama {
            margin-left: 53px;
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

        table{
            margin:auto;
            padding:auto;
        }
    </style>
</head>

<body>
    

   

    <?php if (isset($_COOKIE["cookie1"])) {?>
    <!-- hasil regisr -->
    <?php 
      
      echo "<table border ='1'>";
      echo "<tr>";
      echo "<td>No Induk</td>";
      echo "<td>",$_COOKIE["cookie1"],"</td>";
      echo "</tr>";
      echo "<td>Nama</td>";
      echo "<td>",$_COOKIE["cookie2"],"</td>";
      echo "</tr>";
      echo "<td>status</td>";
      echo "<td>",$_COOKIE["cookie3"],"</td>";
      echo "</tr>";
      echo "<td>Minat</td>";
      echo "<td>",$_COOKIE["cookie4"],"</td>";
      echo "</tr>";
      echo "</table>";
  
?>
    <?php } else{?>
        <!-- tampilan regiter -->
        <form action="Tugas2.php" method="POST">
        <h1>Pendafataran Peserta Seminar</h1>
        <br>
        <label>No Induk</label>
        <input class="no" name="noinduk" type="text"><br>
        <br>
        <label >Nama</label>
        <input type="text" class="nama" name="nama"><br>
        <?php
        echo "<label class = 'label_status'> Status </label>";
        $Daftarstatus = [
            "Dosen",
            "Mahasiswa"
        ];
        echo "<br>";
        foreach ($Daftarstatus as $s) {
            echo "<input class = 'status' name = 'status' value = '$s' type = 'radio'/>$s";
            echo "<br>";
        }
        echo "<br>";
        echo "<label class = 'label_minat'>Minat </label>";
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
    <?php } ?>

</body>

</html>

