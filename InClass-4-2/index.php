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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Calculator App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Advanced Calculator</h1>
    <div class="calculator-container">
        <form method="POST" action="index.php">
            <label for="number1">Enter Number 1:</label>
            <input type="number" id="number1" name="number1" step="any" required>

            <label for="number2">Enter Number 2:</label>
            <input type="number" id="number2" name="number2" step="any" required>

            <label>Select Operations:</label>
            <input type="checkbox" id="add" name="operations[]" value="Addition">
            <label for="add">Addition</label>
            
            <input type="checkbox" id="subtract" name="operations[]" value="Subtraction">
            <label for="subtract">Subtraction</label>
            
            <input type="checkbox" id="multiply" name="operations[]" value="Multiplication">
            <label for="multiply">Multiplication</label>
            
            <input type="checkbox" id="divide" name="operations[]" value="Division">
            <label for="divide">Division</label>
            
            <button type="submit">Calculate</button>
        </form>

        <?php if (!empty($results)): ?>
            <div class="result">
                <h2>Results:</h2>
                <ul>
                    <?php foreach ($results as $result): ?>
                        <li><?php echo $result; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <div class="footer">
        <h2>About This Calculator</h2>
        <p>Created by: <?php echo $creator; ?></p>
        <p>Created Date: <?php echo $createdDate; ?></p>
        <p>Visit us: <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a></p>
    </div>
</body>
</html>
