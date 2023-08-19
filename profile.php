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
    <title>Document</title>
</head>

<body>
    Welcome <?php echo $_SESSION["username"];?>

    <a href="logout.php">Logout</a>

    <hr>

    <a href="update_profile.php">Update Profile</a>

    <table class="table w-50 table-hover">
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Email</th>
        </tr>
        <?php
        
    require("db.php");
    if($con){

        $username = $_SESSION["username"];

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                ?>

        <tr>
            <td> <?php echo $row['user_id']; ?> </td>
            <td> <?php echo $row['username']; ?> </td>
            <td> <?php echo $row['user_email']; ?> </td>
        </tr>
        <?php 
            }
        }
    }else{
        echo "Error Connecting";
    }
?>

    </table>

</body>

</html>