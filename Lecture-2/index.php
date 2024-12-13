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
echo "<br>" . var_dump($test);
function goodMorning($firstName) {
    echo "<br>Good moring: $firstName";
}
$drink = array(
    "tea" => "Green Tea",
    1 => "pop drink",
    "coffee" => "black coffee",
    2 => "goodMorning"
);
echo "<br>" . var_dump($drink);
echo $drink["tea"];
$drink[2]("Abhi");

foreach ($drink as $index => $dri) {
    echo "<br> value is $dri at index: $index";
}

$drinks = ["green-tea", "black-coffee", "pop-drinks"];
echo "<br>" . var_dump($drinks);

foreach ($drinks as &$x) {
    $x = "soda";
}
unset($x);
$x = "unset_without";
echo "<br>" . var_dump($drinks);


$drinks = ["green-tea", "black-coffee", "pop-drinks"];
array_splice($drinks, 0, 1);
var_dump($drinks);

$drinks = ["green-tea", "black-coffee", "pop-drinks"];
unset($drinks[1]);
var_dump($drinks);

$num = [10, 5, 100];
sort($num); 
$clength = count($num);
echo "<br>sort()";
for($x = 0; $x < $clength; $x++) {
    echo "<br>";
    echo $num[$x];
}
rsort($num);
$clength = count($num);
echo "<br>rsort()";
for($x = 0; $x < $clength; $x++) {
    echo "<br>";
    echo $num[$x];
}

$num = [3 => 10, 7 => 5, 9 => 100];
asort($num);
echo "<br>asort()";
foreach($num as $ind => $val) {
    echo "<br>Key: " . $ind . " val: " . $val;
}

$num = [3 => 10, 7 => 5, 9 => 100];
arsort($num);
echo "<br>arsort()";
foreach($num as $ind => $val) {
    echo "<br>Key: " . $ind . " val: " . $val;
}

$num = [3 => 10, 7 => 5, 9 => 100];
ksort($num);
echo "<br>ksort()";
foreach($num as $ind => $val) {
    echo "<br>Key: " . $ind . " val: " . $val;
}

$num = [3 => 10, 7 => 5, 9 => 100];
krsort($num);
echo "<br>krsort()";
foreach($num as $ind => $val) {
    echo "<br>Key: " . $ind . " val: " . $val;
}

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
    reference:
        $car = ["ford", "honda"]
        foreach ($cars as &$x) {
            $x = "Ford";
        }
        unset($x);  //Without the unset($x) function, the $x variable will remain as a reference to the last array item.
        var_dump($cars);
func: array_push
    you use the array_push() function to add a new item

Create an Array: 
    option: 1
        $test = array("Abhi", "john", "mohamad");
    option 2: 
        $test = ["Abhi", "john", "mohamad"];    


    indexing: 
        Default
            $test = [
                    0 => "Abhi",
                    1 => "john",
                    2 => "mohamad"
                ]        
        change
            $test = [
                    "test1" => "Abhi",
                    1 => "john",
                    "test2" => "mohamad"
                ]        
           $test = array(
                    "test1" => "Abhi",
                    1 => "john",
                    "test2" => "mohamad"
                );
            echo $test["test1"];     


add: 
$names = ["Abhi", "john"];
Option: 
    array_push($names, 1,2,3);
    $names[] = 1;
    $names["test"] = "test";
    $names += [3,2,1];
    
removing an iteam from array
option: 

    1. array_splice($names, 1, 2);  array(1,2,3)  => array(1);
    2. unset($names[2]);

sort():
    
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key
-->
    