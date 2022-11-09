<?php 
     session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membaca nilai session</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['pengguna'])){
            echo "<h1> Selamat Datang". $_SESSION['pengguna']."</h1>";
        }
    ?>
</body>
</html>