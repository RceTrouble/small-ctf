<?php
    $con = mysqli_connect("localhost","hacker","holy!shit!","secure_users");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>