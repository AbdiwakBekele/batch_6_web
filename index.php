<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="login.php"> Login </a> <br>

    <a href="profile.php"> Profile </a>

    <h1>
        Insert Student Data
    </h1>

    <form action="insert_user.php" method="POST">
        Fullname: <input type="text" name="fullname"><br>
        Age: <input type="number" name="age"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="text" name="password"><br>

        <input type="submit">
    </form>

    <hr>

    <h1>Read Data</h1>
    <a href="read_user.php">Show</a>

    <hr>

    <h1> Search User </h1>
    <form action="search.php" method="POST">
        <label for="user_id"> User ID</label>
        <input type="text" name="user_id" id="user_id">
        <input type="submit" value="Search">
    </form>

    <hr>
    <h1> Update user Data</h1>
    <form action="update_user.php" method="post">
        User Id: <input type="text" name="user_id"><br>
        Fullname: <input type="text" name="fullname"><br>
        Age: <input type="number" name="age"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit">
    </form>


    <hr>

    <h1> Delete User </h1>
    <form action="delete.php" method="POST">
        <label for="user_id"> User ID</label>
        <input type="text" name="user_id" id="user_id">
        <input type="submit" value="Delete">
    </form>

</body>

</html>