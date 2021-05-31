<?php
    $mysqli = new mysqli("localhost","root","","KMA_TECH");

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
?>