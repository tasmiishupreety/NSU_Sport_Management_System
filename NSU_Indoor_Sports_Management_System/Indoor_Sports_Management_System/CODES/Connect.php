<?php

    $db = mysqli_connect("localhost", "root", "", "Indoor_Sports_Management_System");
    
    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>