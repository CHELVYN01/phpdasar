<?php 
     session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat session</title>
</head>
<body>
    <?php 
       $daftarBuah = array("Apel","Jeruk","Semangka","Jambu","Mangga","Durian");
       $_SESSION['listBuah'] = $daftarBuah;
       echo "<h1>Daftar Buah sudah disimpan ke dalam Session</h1>";
    ?>
</body>
</html>