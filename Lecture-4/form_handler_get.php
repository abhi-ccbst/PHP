<html>
<body>

<?php


        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $name = $_GET["name"]; 

            // Without htmlspecialchars
            echo "Without htmlspecialchars: Welcome " . $name . "<br>";   
            //$name = alert('name');

            // With htmlspecialchars
            echo "With htmlspecialchars: Welcome " . htmlspecialchars($name) . "<br>";
            echo "Your email address is: " .htmlspecialchars($_GET["email"]) . "<br>"; 
        }
        ?>
</body>
</html>