<?php
    session_start();
    unset($_SESSION['login']);
    header("location:index.php")

?>