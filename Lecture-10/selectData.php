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


$stmt = $conn->prepare("INSERT INTO ccbst.Customers (CustomerID, CustomerName, City, Country) VALUES (?, ?, ?, ?)");

$stmt->bind_param("isss", $customerID, $customerName, $city, $country);

$customerData = [
    [1, "Alice", "New York", "USA"],
    [2, "Bob", "Toronto", "Canada"],
    [3, "Charlie", "London", "UK"],
    [4, "Diana", "Sydney", "Australia"],
];

foreach ($customerData as $cus) {
    list($customerID, $customerName, $city, $country) = $cus;
    $stmt->execute();
    echo "Inserted: $customerID, $customerName, $city, $country<br>";
}

$sql = "SELECT * FROM ccbst.Customers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "CustomerID: " .$row["CustomerID"]. " CustomerName: ".$row["CustomerName"]. " City: ".$row["City"]. ", Country: ".$row["City"] . "<br>";
    }
} else {
    echo "0 results";
}



// Clean up
$stmt->close();
$conn->close();
?>


