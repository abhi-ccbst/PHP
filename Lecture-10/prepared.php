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



    // SQL to create database
if ($conn->multi_query($sql) === TRUE) {
    while ($conn->next_result()) {
        if ($result = $conn->store_result()) {
            $result->free(); // Free any result set
        }
    }
    echo "Database and Table(Customers) created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}


$stmt = $conn->prepare("INSERT INTO Customers (CustomerID, CustomerName, City, Country) VALUES (?, ?, ?, ?)");

// i - integer
// d - double
// s - string
// b - BLOB
$stmt->bind_param("isss", $customerID, $customerName, $city, $country);
$customerID = 1;
$customerName = "Alice";
$city = "New York";
$country = "USA";
$stmt->execute();

$customerID = 2;
$customerName = "Bob";
$city = "Toronto";
$country = "Canada";
$stmt->execute();

$customerID = 3;
$customerName = "Charlie";
$city = "London";
$country = "UK";
$stmt->execute();

$customerID = 4;
$customerName = "Diana";
$city = "Sydney";
$country = "Australia";
$stmt->execute();

// Clean up
$stmt->close();
$conn->close();
?>


