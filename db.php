<?php
$servername = "mk-db.ctleukvi2d3k.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "redRider555!";
$dbName = "munchkitDB";
// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>