<!DOCTYPE html>
<html>
<body>
    
<form action="form_handler_get.php" method="GET">
    Name: <input type="text" name="name">
    E-mail: <input type="email" name="email"> 
    <input type="submit">  
</form>
</body>
</html>



<!-- 
Differernce between $_GET and $_POST
Aspect	                $_GET	                                            $_POST
Transmission Method	    Appends data to the URL in the query string.	    Sends data in the HTTP request body.
Visibility	            Data is visible in the URL (e.g., ?name=Abhi).	    Data is not visible in the URL.



-->