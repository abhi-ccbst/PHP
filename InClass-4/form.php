<html><body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process POST request
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $preferences = isset($_POST['preferences']) ? implode(", ", $_POST['preferences']) : 'None';
    $message = htmlspecialchars($_POST['message']);
    
    echo "<h3>POST Request Data:</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Age: $age<br>";
    echo "Gender: $gender<br>";
    echo "Preferences: $preferences<br>";
    echo "Message: $message<br>";
} elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['search'])) {
    // Process GET request
    $search = htmlspecialchars($_GET['search']);
    echo "<h3>GET Request Search Query:</h3>";
    echo "Search Term: $search<br>";

    $search2 = htmlspecialchars($_GET['search2']);
    echo "<h3>GET Request Search2 Query:</h3>";
    echo "Search Term: $search2<br>";
}
?>
</body>
</html>