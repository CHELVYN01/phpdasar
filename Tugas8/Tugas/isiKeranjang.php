<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .isi
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="isi">
        <h1>Isi Keranjang</h1>
        <a href='logout.php'>[Logout]</a>

    </div>
    
    <?php 
        if (isset($_SESSION["keranjang"])) {
            $keranjang = $_SESSION['keranjang'];

            echo "<h2>Barang yang sudah anda pilih</h2>";
                echo "<ol>";
                foreach($keranjang as $k){
                    echo "<li>$k</li>";
                }
                echo "</ol>";
        }
        echo "<a href='MenuUtama.php'>Kembali Memilih barang</a>";
    ?>
</body>
</html>