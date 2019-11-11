<?php
    // Create Connection
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if(mysqli_connect_errno()){
        // Connection Filed
        echo 'Filed to connect to db '. mysqli_connect_errno();
    }

?>