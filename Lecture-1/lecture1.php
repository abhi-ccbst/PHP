<!DOCTYPE html>
<html>
<body>

<?php
// This is single-line comment
# This is also a single-line comment 
/*
    This is multi line comment.
*/ 
$x = 5;
$float = 10.4;
$bool = true;
$y = "Abhi Patel";
ECHO var_dump($x);
echo var_dump($bool);
echo "<br>";
echo "<h2>I am Abhi $x</h2>";
// Print and echo are same thing..
print "<h2>I am Abhi $x</h2>";
print '<h2>I am Abhi $x</h2>';
echo strlen($y);
echo "<br>";
echo str_word_count("$y");
echo "<br>";
echo strpos($y, "Patel");
?>

</body>
</html>

<!-- 
Data types: 
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource

var_dump(): You can get the data type of any object by using the var_dump() function.


*** String
strlen(): The PHP strlen() function returns the length of a string.
str_word_count(): The PHP str_word_count() function counts the number of words in a string.
strpos(): The PHP strpos() function searches for a specific text within a string.

-->