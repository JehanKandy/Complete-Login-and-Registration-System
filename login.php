<?php
    //developer : Jehankandy

    //include config.php file for make connection with database
    include('config.php');

    //start a new session
    session_start();

    //catch the username and password from form
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //remove backslash added by addcslashes() 
    $user = stripcslashes($user);
    $pass = stripcslashes($pass);

    //remove special characters in a string for use sql
    $user = mysqli_real_escape_string($con,$user);
    $pass = mysqli_real_escape_string($con,$pass);

    $pass_en = md5($pass);

    //get username add password from database
    $sql = "select username,pass1 from login_test where username='$user' and pass1= '$pass_en'";


   

    //accept string vlaue represnting a query as one of the parameters 
    $result = mysqli_query($con,$sql);

    //fetch the result row as an associative or numaric array or both
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //returns the number of rows in a result set
    $count = mysqli_num_rows($result);


    
    //velidetion of correct username and password
    if($count == 1){
        setcookie('loginDemo',$user,time()+60*60);
        $_SESSION['login'] =  $user;
        header('location:admin.php');
    }
    else{
        echo('Check Your Username and Password');
    }

?>