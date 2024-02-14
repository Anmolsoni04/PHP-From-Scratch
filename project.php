<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this database failed due to" .mysqli_connect_error());

    }
    
        // echo "DataBase is connected successfully";

        $name = $_POST['name'];
        $age = $_POST['age'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $desc= $_POST['desc'];
        $sql = "INSERT INTO `delhi_trip`.`trip` (`name`, `age`, `email`, `phone`, `others`, `dt`) VALUES ('$name', '$age', '$email', '$phone', '$desc', CURRENT_TIMESTAMP());";

        // echo $sql;

        if($con->query($sql) == true){
            // echo "Successfully Inserted";
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con-> error";
            
        }

        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Delhi trip</h1>
        <p>Enter your details to confirm your participation.</p>
        <?php
        if($insert == true){
            echo "<p class='submitMsg'>We recieve your details. Will get back soon.</p>";
        }
        ?>
        <form action="project.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <img src="image/delhi.jpg" alt="">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="From where you hear us?"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div> 
    <script src="script.js"></script>
</body>
</html>
<!-- id(uniq identify) class(ek element mei = multiple class, multiple element ko same class de skt h) -->