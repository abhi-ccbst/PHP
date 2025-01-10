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
    
    USE ccbst;

    DROP TABLE IF EXISTS OrderDetails;
    DROP TABLE IF EXISTS Orders;
    DROP TABLE IF EXISTS Products;
    DROP TABLE IF EXISTS Customers;

    CREATE TABLE Customers (
        CustomerID INT PRIMARY KEY,
        CustomerName VARCHAR(100),
        City VARCHAR(50),
        Country VARCHAR(50)
    );
    ";

$sql .= "
    INSERT INTO Customers VALUES 
    (1, 'Alice', 'New York', 'USA'),
    (2, 'Bob', 'Toronto', 'Canada'),
    (3, 'Charlie', 'London', 'UK'),
    (4, 'Diana', 'Sydney', 'Australia');
    ";

// SQL to create database
if ($conn->multi_query($sql) === TRUE) {
    echo "Database and Table(Customers) created successfully<br>";

    $last_id = $conn->insert_id;
    echo "New records created successfully. <br>";
    
} else {
    echo "Error creating database: " . $conn->error;
}


// Close connection
$conn->close();

?>
