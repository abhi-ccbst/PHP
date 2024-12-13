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
-->