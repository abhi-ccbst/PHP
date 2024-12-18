<!DOCTYPE html>
<html>
<body>
<form method="post" action="welcome.php">
    <label for="fname">First Name (Required):</label>
    <input type="text" id="fname" name="fname" required><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="femail">Email (Required):</label>
    <input type="email" id="femail" name="femail" required><br><br>

    <label for="password">Password (Required):</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob"><br><br>

    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br><br>

    <label for="hobbies">Hobbies:</label><br>
    <input type="checkbox" id="reading" name="hobbies[]" value="Reading">
    <label for="reading">Reading</label><br>
    <input type="checkbox" id="traveling" name="hobbies[]" value="Traveling">
    <label for="traveling">Traveling</label><br>
    <input type="checkbox" id="sports" name="hobbies[]" value="Sports">
    <label for="sports">Sports</label><br><br>

    <label for="bio">Short Bio:</label><br>
    <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

    <button type="submit">Submit</button>
</form>

<?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     //Collect data from input field
//     $name = htmlspecialchars($_REQUEST['fname']);
//     $email = htmlspecialchars($_REQUEST['femail']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo "Good Morning $name";
//     }
//     echo "Email: $email";
// }

// $x = 100;
// function printX() {
//     // echo $x;
//     echo $GLOBALS['x'];
// }

// function printServer(){
//     // foreach ($_SERVER as $key => $val) {
//     //     echo "<br>" . $key . " " . $_SERVER['PHP_SELF'];
//     // }

//     echo "<br>PHP_SELF " . $_SERVER['PHP_SELF'];
//     echo "<br>SERVER_NAME " . $_SERVER['SERVER_NAME'];
//     echo "<br>HTTP_HOST " . $_SERVER['HTTP_HOST'];
//     echo "<br>HTTP_REFERER " . $_SERVER['HTTP_REFERER'];
//     echo "<br>HTTP_USER_AGENT " . $_SERVER['HTTP_USER_AGENT'];
//     echo "<br>SCRIPT_NAME " . $_SERVER['SCRIPT_NAME'];
// }

// printX();
// printServer();

?>
</body>
</html>

<!-- 
Superglobals
    1. $GLOBALS: Global variables are variables that can be accessed from any scope. 
    2. _SERVER
    3. _REQUEST $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
                In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
    4. _POST
    5. _GET


    _SERVER:
        PHP_SELF: Returns the filename of the currently executing script
        SERVER_NAME: Returns the name of the host server
        HTTP_HOST: Returns the Host header from the current request
        HTTP_REFERER: Returns the complete URL of the current page
        SCRIPT_NAME: Returns the path of the current script
-->