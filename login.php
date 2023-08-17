<?php 

session_start();
if(isset($_SESSION["username"])){
    header("Location: profile.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Login</h1>

    <form action="login_ctrl.php" method="POST">
        email: <input type="email" name="email"> <br>
        password: <input type="text" name="password"> <br>
        <input type="submit">
    </form>

</body>

</html>