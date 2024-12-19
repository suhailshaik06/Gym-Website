<?php
$servername = "localhost"; // Usually 'localhost' for local development
$username = "root"; // Your MySQL username, usually 'root'
$password = ""; // Your MySQL password, usually empty for local setup
$dbname = "gym"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>