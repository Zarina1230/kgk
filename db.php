<?php

    $host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'hdfc';
    
    //create a connection
    $connection = mysqli_connect($host, $db_user, $db_pass, $db_name);
    
    //test if connection failed
    if(mysqli_connect_errno()){
        die("connection failed: "
            . mysqli_connect_error()
            . " (" . mysqli_connect_errno()
            . ")");
    }
    
    mysqli_query($connection, $query);
    
    mysqli_close($connection);
    
?>