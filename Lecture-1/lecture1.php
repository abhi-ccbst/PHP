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
$a= "Abhi"; 
$p= "Patel";
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
echo "<br>";
echo strtoupper($y);
echo "<br>";
echo strtolower($y);
echo "<br>";
echo str_replace("Patel", "Scott", $y);
echo "<br>";
echo strrev($y);
echo "<br>";
echo trim(" Abhi Patel ");

$full= $a . " " . $p;
$full = "$a $p test";
echo "<br>$full";
echo "<br>";
// full: Abhi Patel test
echo substr($full, 5);
echo "<br>";
echo substr($full, -4);

$x = 1;
$int_cat= (string)$x;
echo var_dump($int_cat);

echo rand(1, 100);
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
strtoupper(): The strtoupper() function returns the string in upper case:
strtolower(): The strtolower() function returns the string in lower case:
str_replace(): The PHP str_replace() function replaces some characters with some other characters in a string.
strrev(): The PHP strrev() function reverses a string.
trim(): The trim() removes any whitespace from the beginning or the end:
substr():  can return a range of characters by using the substr() function.

boolean: 
var_dump(is_float($x))
var_dump(is_int($x))
var_dump(is_numeric($x))

Cast:
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Arra

Math: 
pi(): 3.14
min(1,2,3,4,5)
max(1,2,3,4,5)
sqrt(4)
round()
rand()
rand(1)
rand(1, 100)
-->