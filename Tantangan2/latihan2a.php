<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bio {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            margin: auto;
            padding: auto;
            border: black solid 3px;
        }

        #tombol {
            margin-left: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <form action="latihan2b.php" method="POST">
        <table>
            <tr>
                <td colspan="5">
                    <h1 class="bio">FORM BIODATA</h1>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="genre">Pria</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" name="genre">Wanita</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="music">Music</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="programing">Programming</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="game">Game</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="movies">Movies</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="traveling">Travelling</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="sport">Sport</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="organization">Organization</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="automotive">Automotive</td>
            </tr>
            <tr>
                <td><input type="submit" name="tombol" id="tombol"></td>
            </tr>
        </table>
    </form>
</body>

</html>