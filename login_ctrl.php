<?php 
session_start();
require('db.php');

if($con){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_password='$password' ";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        header("Location: profile.php");
    }else{
        echo "Invalid Email OR Password";
    }

}

?>