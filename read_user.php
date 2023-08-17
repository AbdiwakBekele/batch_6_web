<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>

    <table class="table w-50 table-hover">
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Email</th>
        </tr>
        <?php
        
    require("db.php");
    if($con){

        $sql = "SELECT * FROM user";
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