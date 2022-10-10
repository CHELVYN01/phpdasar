<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td colspan="2">
                <h1>FORM BIODATA - REVIEW</h1>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST["alamat"]; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $_POST["umur"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["genre"]; ?></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td><?php
                $opt = "";
                $hobi = $_POST["hobi"];
                for ($i = 0; $i < count($hobi); $i++) {
                    echo $hobi[$i], ",";
                }
                ?></td>
        </tr>
    </table>





</body>

</html>