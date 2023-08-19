<?php 

require("db.php");

if($con){

    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM user WHERE user_id = '$user_id'";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Successfully Deleted";
    }else{
        echo "Error Deleting";
    }
}


?>