<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "database-1.ce094vllcnpk.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "rootROOT2020.";
    $dbName = "employees";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);