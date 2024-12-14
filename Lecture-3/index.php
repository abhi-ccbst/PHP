<!DOCTYPE html>
<html>
<body>
<form method="post" action="welcome.php">
    <!-- action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
    Name: <input type="text" name="fname">
    Email: <input type="email" name="femail" require="true">
    <input type="submit">
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