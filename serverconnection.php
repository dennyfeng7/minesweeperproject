<?php
$servername = "mars.cs.qc.cuny.edu";
$username = "fede7739"; 
$password = "15347739"; 

// Create connection 
$conn = new mysqli($servername, $username, $password); 

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error); 
}
echo "Connected successfully!"; 


$conn->close(); 
?>
