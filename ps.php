<?php
    $pass = "147852369";


    $hash = password_hash($pass,PASSWORD_DEFAULT);

    echo "Generated hash: ".$hash;

    $verify = password_verify($pass, $hash);

    if ($verify) {
        echo 'Password Verified!';
    } else {
        echo 'Incorrect Password!';
    }

?>
