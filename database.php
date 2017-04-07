<?php
$servername = "localhost";
$username = "FarazFaruqi";
$password = "makarov473";

// Create connection
$connect = new mysqli($servername, $username, $password,'project');

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully to project" ;
?>