<html>
<body>

<h1>Submitted User Information</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<p>Welcome, " . htmlspecialchars($_POST["fname"]) . "!</p>";

        if (!empty($_POST["lname"])) {
            echo "<p>Last Name: " . htmlspecialchars($_POST["lname"]) . "</p>";
        }
        
        echo "<p>Your email address is: " . htmlspecialchars($_POST["femail"]) . "</p>";
        
        echo "<p>Password: " . htmlspecialchars($_POST["password"]) . "</p>";
        if (!empty($_POST["dob"])) {
            echo "<p>Date of Birth: " . htmlspecialchars($_POST["dob"]) . "</p>";
        }

        if (!empty($_POST["gender"])) {
            echo "<p>Gender: " . htmlspecialchars($_POST["gender"]) . "</p>";
        }

        if (!empty($_POST["hobbies"])) {
            echo "<p>Hobbies: " . implode(", ", array_map('htmlspecialchars', $_POST["hobbies"])) . "</p>";
        }

        if (!empty($_POST["bio"])) {
            echo "<p>Bio: " . (htmlspecialchars($_POST["bio"])) . "</p>";
        }
    } else {
        echo "<p>No data received. Please fill out the form.</p>";
    }
    ?>

</body>
</html>