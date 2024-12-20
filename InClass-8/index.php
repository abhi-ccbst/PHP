<?php
require_once 'classes/Fiction.php';
require_once 'classes/NonFiction.php';

// Create Fiction Book
$fictionBook = new Fiction("The Hobbit", "J.R.R. Tolkien", 20.99, "Fantasy");

// Create NonFiction Book
$nonFictionBook = new NonFiction("Sapiens", "Yuval Noah Harari", 25.99, "History");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Library Management System</h1>

        <div class="book">
            <h2>Fiction Book</h2>
            <p><strong>Title:</strong> <?php echo $fictionBook->getDetails(); ?></p>
        </div>

        <div class="book">
            <h2>NonFiction Book</h2>
            <p><strong>Title:</strong> <?php echo $nonFictionBook->getDetails(); ?></p>
        </div>
    </div>
</body>
</html>
