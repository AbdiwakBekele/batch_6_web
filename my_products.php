<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php 
        session_start();
        if(isset($_SESSION['product_delete'])){
            echo $_SESSION['product_delete'];
            echo "<br>";
            unset($_SESSION['product_delete']);
        }
    ?>

    <table class="table w-50 table-hover">
        <tr>
            <th>Product Type</th>
            <th>Product Price</th>
            <th>Action</th>
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
            <td>
                <a href="#"><i class="fa fa-edit"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#myModal<?php echo $row['product_id'];?>"><i
                        class="fa fa-trash text-danger"></i></a>
            </td>

            <!-- The Modal -->
            <div class="modal" id="myModal<?php echo $row['product_id'];?>">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="delete_product.php?product_id=<?php echo $row['product_id'];?>"
                                class="btn btn-danger">Delete</a>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
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