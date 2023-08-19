<?php 

require("db.php");

if($con){

    $user_id = $_POST['user_id'];
    $username = $_POST['fullname'];
    $user_age = $_POST['age'];
    $user_email = $_POST['email'];

    $sql = "UPDATE user SET username='$username', user_age='$user_age', user_email='$user_email' WHERE user_id = '$user_id'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Successfully Updated";
    }else{
        echo "Error Updating";
    }
}


?>