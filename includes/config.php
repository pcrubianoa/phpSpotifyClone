<?php

    ob_start();

    $timezone = date_default_timezone_set("America/Bogota");

    $con = mysqli_connect("localhost", "root", "", "spotifyclone");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }

?>