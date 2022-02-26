<?php
    //developer : Jehankandy


    //include config.php file for make connection with database
    include('config.php');

    //catch the username and password from form
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    $hash1 = md5($pass1);

    //insert data to database
    $sql = "INSERT INTO login_test(username, email, pass1)VALUES ('$user', '$email', '$hash1')";
    
    //accept string vlaue represnting a query as one of the parameters
    $result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php

            echo ("Hello ".$user);

        ?>
    </h1>
</body>
</html>