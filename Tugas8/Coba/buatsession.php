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
        $_SESSION['pengguna'] = "Joko sembung";
        echo "<h1> Selamat, Variabel session sudah terbentuk</h1>";
    ?>
</body>
</html>