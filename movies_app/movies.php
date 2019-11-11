<?php

    // Import JSON data
    $jsonData = file_get_contents("movies.json");
    
    // Decode Data
    $data = json_decode($jsonData, true);

?>