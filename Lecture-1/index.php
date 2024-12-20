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

define("COFFEE", "BLACK");
echo COFFEE;

const TEA = "GREEN_TEA";
echo TEA;

$x = 100;
$y = "100";
var_dump($x <=> $y);

if ($x < 10) {
    echo "The $x < 10 is true";
} elseif ($x == 10) {
    echo "The $x == 10 is true";
} else {
    echo "the $x > 10 is true";
}

$fav = "red";

switch ($fav) {
    case "red": 
        echo "fav: is red";
        break;
    
    case "blue": 
        echo "fav: is blue";
        break;
                    
    case "green": 
        echo "fav: is green";
        break;
    
    default: 
        echo "fav: is neither red, blue, nor greeen";   
}

$x = 1;
while($x < 6) {
    if ($x==4) {
        break;
    }
    echo "<br>The value of X: $x";
    $x++;
}

do {
    echo "<br>do while: The value of X: $x";
} while($x < 0);

for ($z=0; $z < 5; $z++) {
    if ($z == 3) {
        continue;
    }
    echo "<br>for: The value of Z: $z";
}
$nameFirst = "Abhi";

echo "<br>without ref " . morningMessage($nameFirst);
echo "<br> $nameFirst";

echo "<br>without ref " . morningMessageRef($nameFirst);
echo "<br> $nameFirst";
echo "<br>Sum of 1,2,3,4,5 is " . sum(1,2,3,4,5);

function morningMessage($name) {
    $name = "john";
    return "Good Moring: $name";
}

function morningMessageRef(&$name) {
    $name = "john";
    return "Good Moring with ref: $name";
}

function sum(...$xum) {
    $len = count($xum);
    $sumOfX = 0;
    for ($i = 0; $i < $len; $i++) {
         $sumOfX += $xum[$i];
    }
    return $sumOfX;
}

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

Const: (no $ sign before the constant name)
    define(name, value);
    const name = "value";


Operators: 
    ==  Returns true if $x is equal to $y
    === Returns true if $x is equal to $y, and they are of the same type
    !=  Returns true if $x is not equal to $y
    <>  Returns true if $x is not equal to $y
    !== Returns true if $x is not equal to $y, or they are not of the same type
    >   Returns true if $x is greater than $y
    <   Returns true if $x is less than $y
    >=  Returns true if $x is greater than or equal to $y
    <=  Returns true if $x is less than or equal to $y
    <=> Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.


x = 5 
y = 10
var_dump(x<=>y)  = -1

x = 5 
y = 5
var_dump(x<=>y)  = 0

x = 50 
y = 10
var_dump(x<=>y)  = 1

if... elseif... else...
    if (condition) {
        code to be executed if this condition is true;
    } elseif (condition) {
        // code to be executed if first condition is false and this condition is true;
    } else {
        // code to be executed if all conditions are false;
    }

switch 
    switch (expression) {
        case label1:
            //code block
            break;
        case label2:
            //code block;
            break;
        case label3:
            //code block
            break;
        default:
            //code block
    }

Loop:
    while: 
        $i = 1;
        while ($i < 6) {
            echo $i;
            $i++;
        }
    
    do while: 
        $i = 1;
        do {
            echo $i;
            $i++;
        } while ($i < 6);
    
    for:
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
break: The break statement can be used to jump out of different kind of loops.

continue: The continue statement can be used to jump out of the current iteration of a loop, and continue with the next.

function: 
    function myMessage() {
        echo "Hello world!";
    }

    function myMessage($test) {
        echo "Hello world! $test";
    }

    function myMessage($test) {
        return "Hello world! $test";
    }
    reference:    To turn a function argument into a reference, the & operator is used

    Variable Number of Arguments
        function sum(...$x) {
            //code
        }
        function sum ($y, ...$x) {
            //code
        }

        wrong
            function sum(...$x, $y) {
                code
            }
        wrong
            function sum(...$x, ...$y) {
                //code
            }
-->


