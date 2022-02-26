<?php
    //name of the server
    $server = "localhost";

    //username of server (default -> root)
    $user = "root";

    //password of server (default -> empty)
    $pass = "";

    //name of the database (it will change according to your database name)
    $db = "login2";

    //make connection

    $con = mysqli_connect($server, $user, $pass , $db);

    //if any error in connection

    if(!$con){
        die("Can't make a connection with Databes".mysqli_connect_error());
    }


?>