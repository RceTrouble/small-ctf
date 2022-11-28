<?php
    $con = mysqli_connect("localhost","hacker","s3cur3!p4ss!","test_users");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
