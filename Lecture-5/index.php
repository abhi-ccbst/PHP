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
    // $readFile = readfile('fileRead.txt');
    // echo $readFile;

    // $myFile = fopen("fileRead.txt","r");
    $myFile = fopen("fileRead.txt", "a");
    $txt = "Hello, My name is Abhi";
    fwrite($myFile, $txt);
    fclose($myFile);
    // while (!feof($myFile)) {
    //     echo fgets($myFile) . "<br>";
    //     // echo fgetc($myFile) . "<br>";

    // }
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

    <?php 
    require 'footer.php'
    ?>
</body>
</html>


<!-- 
The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement. 
The include and require statements are identical, except upon failure:
    * require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    * include will only produce a warning (E_WARNING) and the script will continue



File Management: 
    readfile(location): The readfile() function is useful if all you want to do is open up a file and read its contents.

    fopen(): it give more eoption then readfile()
    fread(): The fread() function reads from an open file.
    fgets(): The fgets() function is used to read a single line from a file.
    fgetc(): The fgetc() function is used to read a single character from a file.
    feof(): The feof() function checks if the "end-of-file" (EOF) has been reached.
    fwrite(): The fwrite() function is used to write to a file.


Modes	Description
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

-->