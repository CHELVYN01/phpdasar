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
                <td><input type="radio" name="genre" value="Pria">Pria</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" name="genre" value="Wanita">Wanita</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi[]" value="Music">Music</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Programing">Programming</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Game">Game</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Movies">Movies</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Travelling">Travelling</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Sport">Sport</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Organization">Organization</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Automotive">Automotive</td>
            </tr>
            <tr>
                <td><input type="submit" name="tombol" id="tombol"></td>
            </tr>
        </table>
    </form>
</body>

</html>