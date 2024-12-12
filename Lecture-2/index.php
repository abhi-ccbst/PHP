<!DOCTYPE html>
<html>
<body>

<?php

$names = array("Abhi", "John", "Drake", 12, 10);
echo count($names);

echo $names[0];
$names[0] = "Patel";
echo var_dump($names);

foreach ($names as $name) {
    echo "<br> $name";
}

array_push($names, 1,2,3);
echo "<br>" . var_dump($names);

// array $test
$test[1] = "One";
$test[3] = "three";
array_push($test, 1,2,3);
var_dump($test);
?>

</body>
</html>

<!-- 
Array: An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
    $test = array("Abhi", "john", "mohamad");
    Array items can be of any data type.

foreach
    foreach ($test as $x) {
        echo  $x;
    }

func: array_push
    you use the array_push() function to add a new item
-->