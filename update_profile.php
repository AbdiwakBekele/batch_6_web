<?php 

session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>

    <h1>
        Update Your Profile
    </h1>


    <?php 
    require("db.php");
    if($con){

        $username = $_SESSION["username"];

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['user_id'];
            $fullname = $row['username'];
            $email = $row['user_email'];
            $age = $row['user_age'];
            ?>

    <form action="update_user.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        Fullname: <input type="text" name="fullname" value="<?php echo $fullname; ?>"><br>
        Age: <input type="number" name="age" value="<?php echo $age; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>

        <input type="submit">
    </form>


    <?php
        }
    }
    
    ?>



</body>

</html>