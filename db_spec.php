<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "festiwal_nauki";

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
