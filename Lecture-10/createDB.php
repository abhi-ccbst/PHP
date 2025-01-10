<?php

$serverName = "127.0.0.1";
$userName = "root";
$password = "ccbst@123";

// Create connection
$conn = new mysqli($serverName, $userName, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successfully<br>";
}

$sql = "
    CREATE DATABASE IF NOT EXISTS ccbst;
";

// SQL to create database
if ($conn->multi_query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}


// Close connection
$conn->close();

?>
