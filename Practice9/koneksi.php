<?php
    $servername = "localhost"; 
    $username = "kelasti1_18102199"; 
    $password = "Arton123#.";
    $dbname = "kelasti1_18102199_practice9";
    // Create connection 
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed:  " . $conn->connect_error);
    }
?>
