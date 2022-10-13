<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="bokol.php" method="POST">
        <label for="user">User Name</label>
        <input type="text" name="nama"><br>
        <label for="sandi">Password</label>
        <input type="text" name="password"><br>
        <input type="submit" name="tekan" id="tekan">
    </form>



</body>

</html>

<?php
$users = "admin";
$passwords = "admin123";
$user = $_POST["nama"];
$password = $_POST["password"];

if ($user == $users && $password == $passwords) {
    echo "selamat datang anda sukses login";
} else {
    echo "Mohon maaf anda gagal login";
}
?>