<?php

    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Bogota");

    //$con = mysqli_connect("localhost", "root", "", "spotifyclone");
    $con = mysqli_connect("ec2-107-22-238-186.compute-1.amazonaws.com", "njyuewanyiurpq", "455e204572c677b7e761cb0a5f338d20e295d7068cb134064f10f06105025b46", "dcfvmkl99lqlnd");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }

?>