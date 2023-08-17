<?php 

require("db.php");

if($con){
    $sql = "UPDATE user SET username='Gelila', user_age='15', user_email='gelila@gmial.com', user_password='000000' WHERE user_id = 3";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Successfully Updated";
    }else{
        echo "Error Updating";
    }
}


?>