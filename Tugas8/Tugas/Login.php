<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        form{
            margin-left: 500px;
            margin-top: 50px;
        }
       form .submit{
        margin-left: 100px;
       }
        
    </style>
</head>

<body>
<?php 
    
    if (isset($_SESSION['berhasil'])){
        header("Location: MenuUtama.php");
     }
    
    if (isset($_POST['buton'])) {
        $username = $_POST['userName'];
        $password = $_POST['pin'];
        if ($username == "kelvin" && $password == "123") {
            $_SESSION['username'] = $username;
            header("Location: MenuUtama.php");
        } else {
            header("Location: logingagal.php");
        }
    }
    ?>
    <h1>LOGIN</h1>
    <form action="" method="POST">
        <label for="userName">username</label>
        <input type="text" name="userName"><br><br>
        <label for="pin">Password</label>
        <input type="password" name="pin"><br><br>
        <input type="submit" name="buton" class="submit">
    </form>
</body>

</html>
