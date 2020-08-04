<?php

$servername = "mars.cs.qc.cuny.edu";
$username = "username"; 
$password = "password";

// Create connection 
$conn = new mysqli($servername, $username, $password); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Otherwise, Create Database 
// $sql = "CREATE DATABASE myDB"; 
// if($conn->query($sql) === TRUE) {
//     echo "Database successfully created.";
// } else {
//     echo "Error creating database: " . $conn->error; 
// }



?>