<html>
<body>
    <h1>Form Data</h1>
    <ul>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            foreach ($_POST as $key => $value) {
                echo "<li><strong>$key:</strong> " . htmlspecialchars($value) . "</li>";
            }
        } else {
            echo "<p>No data submitted!</p>";
        }
        ?>
    </ul>
</body>
</html>
