<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>backend php</title>
</head>

<body>

    <?php 

    require("db.php");

    if($con){

        $username = $_POST['fullname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       // Create Data
        $sql = "INSERT INTO user (username, user_age, user_email, user_password) 
                    VALUES ('$username', '$age', '$email', '$password') ";
        
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h1 class='alert alert-success'>Data Inserted</h1>";
        }else{
            echo "Error Data Inserting";
        }

    }else{
        echo "Error Connection";
    }
?>

</body>

</html>
