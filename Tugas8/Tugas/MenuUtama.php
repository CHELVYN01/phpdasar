<?php
session_start();

if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .judul{
            text-align: center;
        }
    </style>
</head>
 
    <body>
       
        <?php
        echo "<div class='judul'>";
        echo " <h1>Pilih Barang</h1>";
         echo " <h2>Selamat Datang ".$_SESSION['username'] ."</h2>";
         echo " <a href='logout.php'>[Logout]</a>";
         echo "</div>";
        ?>
        <form action="next.php" method="POST">
            <table>
                <tr>
                    <td>Makanan Minuman</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $makanMinum = ["Gula", "Teh", "Kopi", "Susu", "Biskuit"];

                        foreach ($makanMinum as $m) {
                            echo "<input class = 'makanMinum' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><br>Peralatan Mandi</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $mandi = ["Sikat Gigi", "Pasta Gigi", "Sabun", "Shampoo", "Sabun Cuci Muka"];

                        foreach ($mandi as $m) {
                            echo "<input class = 'mandi' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><br>Alat Tulis</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $tulis = ["Pensil", "Penggaris", "Penghapus", "Bollpoint", "Kertas HVS"];

                        foreach ($tulis as $m) {
                            echo "<input class = 'tulis' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>

                    <td><br><input type="submit" value="Masuk Keranjang" name="masuk_keranjang" /></td>
                    <td><a href='isiKeranjang.php'>Lihat Isi Keranjang</a></td>
                </tr>
            </table>
        </form>

    </body>

    </html>
<?php } else {
    header("Location: login.php");
} ?>