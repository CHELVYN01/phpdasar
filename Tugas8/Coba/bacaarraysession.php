<?php 
    session_start()
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memabaca Array dari dalam Session</title>
 </head>
 <body>
    <?php 
         if (isset($_SESSION["listBuah"])){
            $daftarBuah = $_SESSION['listBuah'];

            echo "<h1> Daftar Buah</h1>";
            echo "<ol?>";
            foreach($daftarBuah as $buah){
                echo "<li>$buah</li>";
            }
            echo "</ol>";
         }
    ?>
 </body>
 </html>