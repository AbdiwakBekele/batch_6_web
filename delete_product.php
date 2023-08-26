<?php 
session_start();


require("db.php");

if($con){
    $product_id = $_GET['product_id'];

    $sql = "DELETE FROM product WHERE product_id = '$product_id'";

    $result = mysqli_query($con, $sql);

    if($result){
        $_SESSION['product_delete'] = "<div class='alert alert-success' >Successfully deleted </div>";
        header('Location: my_products.php');
    }else{
        $_SESSION['product_delete'] = "Error Deleting";
        header('Location: my_products.php');
    }
}

?>