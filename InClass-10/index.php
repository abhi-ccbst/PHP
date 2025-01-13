<?php
// Database credentials
$serverName = "127.0.0.1";
$userName = "root";
$password = "ccbst@123";
$dbName = "ccbst";

// Create a connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the Users table if it doesn't exist
$conn->query("
    CREATE TABLE IF NOT EXISTS Users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        city VARCHAR(100) NOT NULL
    )
");

// Initialize response messages
$response = "";

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'create') {
        // Handle user creation
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $city = $_POST['city'] ?? '';

        $stmt = $conn->prepare("INSERT INTO Users (name, email, city) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $city);

        if ($stmt->execute()) {
            $lastInsertId = $stmt->insert_id;
            $response = "<p style='color:green;'>User created successfully! ID: $lastInsertId</p>";
        } else {
            $response = "<p style='color:red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        
    } elseif (isset($_POST['action']) && $_POST['action'] === 'retrieve') {
        // Handle user retrieval
        $userId = $_POST['user_id'] ?? '';

        
        $result = $conn->query("SELECT * FROM Users WHERE id = $userId");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = "<h3>Retrieved User</h3>
                            <ul>
                                <li><strong>ID:</strong> {$row['id']}</li>
                                <li><strong>Name:</strong> {$row['name']}</li>
                                <li><strong>Email:</strong> {$row['email']}</li>
                                <li><strong>City:</strong> {$row['city']}</li>
                            </ul>";
        } else {
            $response = "<p style='color:red;'>No user found with ID: $userId</p>";
        }
    
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px;
            background-color: #f9f9f9;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input[type="text"],
        form input[type="email"],
        form button {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
        .response {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>User Management</h1>

    <!-- Display response messages -->
    <div class="response"><?= $response; ?></div>

    <!-- Form to create a user -->
    <form method="POST" action="">
        <h2>Create User</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <button type="submit" name="action" value="create">Create User</button>
    </form>

    <!-- Form to retrieve a user -->
    <form method="POST" action="">
        <h2>Retrieve User</h2>
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required>

        <button type="submit" name="action" value="retrieve">Retrieve User</button>
    </form>
</body>
</html>
