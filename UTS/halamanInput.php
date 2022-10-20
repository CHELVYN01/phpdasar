<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid black 3px;
            margin: auto;
            padding: auto;
        }
    </style>
</head>

<body>
    <form action="halamanTampil.php" method="POST">
        <table>
            <tr>
                <th colspan=" 3">
                    <h2>Pesan Makanan dan Minuman</h2>
                </th>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td></td>
                <td><input name="nama" type="text"></td>
            </tr>
            <tr>
                <td>Makanan</td>
                <td></td>
                <td><input type="checkbox" name="makan[]" value="Nasi Goreng">Nasi Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="makan[]" value="mie Goreng">mie Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="makan[]" value="mie godong">mie godong</td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td></td>
                <td><input type="checkbox" name="minum[]" value="Es Teh Manis">Es Teh Manis</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="minum[]" value="Es Jeruk">Es Jeruk</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="minum[]" value="Teh Panas">Teh Panas</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="minum[]" value="Jeruk Panas">Jeruk Panas</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"></td>
            </tr>

        </table>
    </form>
</body>

</html>