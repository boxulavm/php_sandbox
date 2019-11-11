<?php

    // Create Connection
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check Connection
    if(mysqli_connect_errno()){
        // Connection Faild
        echo 'Failed to connect to MySql '. mysqli_connect_errno();
    }

?>
