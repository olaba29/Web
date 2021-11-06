<?php
    $dbhost = "db";
    $dbuser = "admin";
    $dbpass = "1234";
    $dbname = "database";
    
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
    
        die("failed to connect!");
    }
?>