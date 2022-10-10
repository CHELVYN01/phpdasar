<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="latatihan.php" method="POST"></form>
    <label for="user">User Name</label>
    <pre><input type="text" name="nama"></pre><br>
    <label for="sandi">Password</label>
    <pre><input type="text" name="password"></pre><br>
    <input type="submit" name="tekan" id="tekan">

    <?php
    $user = "";
    $password = "";
    $user = $_POST["nama"];
    $password = $_POST["password"];

    if ($user = "admin" && $password = "admin123") {
        echo "selamat datang anda sukses login";
    } elseif ($user = "" && $password = "") {
    } else {
        echo "Mohon maaf anda gagal login";
    }
    ?>
</body>

</html>