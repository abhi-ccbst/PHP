
<htm>
<body>
<?php 
$serverName = "127.0.0.1";
$userName = "root";
$password = "ccbst@123";
$database = "ccbst"; 
// MySQLi
$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn -> connect_error) {
    // echo "Database is not connecting";
    die("Connection failed: " . $conn -> connect_error);
} else {
    echo "Database successfully";
}

?>
</body>
</html>

