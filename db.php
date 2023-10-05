<?php
    $con = mysqli_connect("db","wordpress","wordpress","wordpress");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>