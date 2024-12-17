<html>
<body>
<?php
// Initialize variables
$results = [];
$creator = "Abhi Patel";
$createdDate = "December 2024";
$website = "www.calculator.com";

// Handle POST for Calculator Operations
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = isset($_POST['number1']) ? floatval($_POST['number1']) : 0;
    $number2 = isset($_POST['number2']) ? floatval($_POST['number2']) : 0;
    $operations = isset($_POST['operations']) ? $_POST['operations'] : [];

    if (in_array('Addition', $operations)) {
        $results[] = "Addition: " . ($number1 + $number2);
    }
    if (in_array('Subtraction', $operations)) {
        $results[] = "Subtraction: " . ($number1 - $number2);
    }
    if (in_array('Multiplication', $operations)) {
        $results[] = "Multiplication: " . ($number1 * $number2);
    }
    if (in_array('Division', $operations)) {
        $results[] = ($number2 != 0) ? "Division: " . ($number1 / $number2) : "Division: Cannot divide by zero";
    }
}

// Pass results back to the form
include 'index.php';
?>


</body>
</html>