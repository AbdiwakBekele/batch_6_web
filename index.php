<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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

</body>

</html>