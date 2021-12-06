<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    if(isset($_SESSION['userID'])){
        header("Location: home.php");
        die();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>percobaan m8</title>
</head>

<body>
    <img src="../assets/wave.svg" alt="wave background" class="body-bg">
    <div class="bucket">
        <p>Login For Continue </p>
        <form action="../app/controller/login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>

</html>