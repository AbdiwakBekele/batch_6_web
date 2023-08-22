<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table class="table w-50 table-hover">
        <tr>
            <th>Product Type</th>
            <th>Product Price</th>
        </tr>
        <?php
        
    require("db.php");
    if($con){

        $sql = "SELECT * FROM product WHERE user_id = 10";
        $result = mysqli_query($con, $sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                ?>

        <tr>
            <td> <?php echo $row['product_type']; ?> </td>
            <td> <?php echo $row['product_price']; ?> </td>
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