<?php

// Database configuration    
$hostname = "localhost"; 
$username = "root"; 
$password = "password"; 
$dbname   = "single_sign_on";
 
// Create database connection 
$con = new mysqli($hostname, $username, $password, $dbname); 
 
// Check connection 
if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error); 
}
?>