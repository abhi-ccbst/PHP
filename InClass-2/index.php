<!DOCTYPE html>
<html>
<body>
<?php

// Generate an array of random numbers
function generateNumbers() {
    $numbers = [];
    for ($i = 0; $i < 10; $i++) {
        $numbers[] = rand(1, 100);
    }
    return $numbers;
}

// Find the maximum number in an array
function findMax($array) {
    return max($array);
}

// Calculate the average of the numbers in an array
function calculateAverage($array) {
    return array_sum($array) / count($array);
}

// Filter only even numbers from an array
function filterEvenNumbers($array) {
    return array_filter($array, function ($number) {
        return $number % 2 === 0;
    });
}

// Main script
$numbers = generateNumbers();
$maxNumber = findMax($numbers);
$average = calculateAverage($numbers);
$evenNumbers = filterEvenNumbers($numbers);

// Display results
echo "<br>Original Array: " . implode(", ", $numbers);
echo "<br>Maximum Number: $maxNumber";
echo "<br>Average: $average";
echo "<br>Even Numbers: " . implode(", ", $evenNumbers);
?>
</body>
</html>