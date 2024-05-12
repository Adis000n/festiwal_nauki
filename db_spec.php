<?php
// Database connection parameters
//Tu są dane do serwera na home pl
$host = "46.242.239.199:3380";
$username = "37911724_festiwal_nauki";
$password = "xjW1jlazS";
$database = "37911724_festiwal_nauki";
//Tu są dane do lokalnie
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "festiwal_nauki";

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
