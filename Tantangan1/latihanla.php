<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: black solid 3px;

        }

        .input1 {
            margin-left: 85px;
        }

        .input2 {
            margin-left: 70px;
        }


        form {
            margin: 20px;
            padding: 20px;
        }

        select {
            margin-left: 10px;
        }

        .tombol {
            margin-left: 100px;
        }
    </style>
</head>

<body>

    <form action="latihanlb.php" method="POST">
        <table>
            <tr>
                <td>
                    <p>NIM <input class="input1" type="text" name="nim"></p>
                    <p> NAMA <input class="input2" type="text" name="nama"> </p>
                    <p> Status Kelulusan <select name="opt" id="">
                            <option value="memuaskan">Memuaskan </option>
                            <option value="No">Tidak memuasakan</option>
                        </select></p>
                    <input class="tombol" type="Submit">
                </td>

        </table>
    </form>

</body>

</html>