<!DOCTYPE html>
<html>
<body>

<?php


$num1 = 0;
$num2 = 0;
assignValue($num1, 10);
assignValue($num2, 5);

echo "<br>The add($num1 and $num2): " . add($num1, $num2);
echo "<br>The sub($num1 and $num2): " . sub($num1, $num2);
echo "<br>The multi($num1 and $num2): " . multi($num1, $num2);
echo "<br>The div($num1 and $num2): " . div($num1, $num2);


// Properties
function assignValue(&$a, $val){
    $a = $val;
}
// Calculator
function add(...$xum) {
    $sumOfX = 0;
    for ($i = 0; $i < count($xum); $i++) {
        $sumOfX += $xum[$i];
    }
    return $sumOfX;
}

function multi(...$xum) {
    $sumOfX = 1;
    for ($i = 0; $i < count($xum); $i++) {
        $sumOfX = $sumOfX * $xum[$i];
    }
    return $sumOfX;
}

function sub(...$xum) {
    $sumOfX = 1;
    for ($i = 0; $i < count($xum); $i++) {
        if ($i == 0) {
            $sumOfX = $xum[$i];
        } else {
            $sumOfX -= $xum[$i];
        }   
    }
    return $sumOfX;
}

function div($a, $b) {
    return $a/$b;
}

?>

</body>
</html>