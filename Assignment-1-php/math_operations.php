<?php
// Operators (Arithmetic)
$num1 = 12;
$num2 = 3;

echo "Addition is :"  . ($num1 + $num2) . "<br>";
echo "Subtraction is :"  . ( $num1 - $num2) . "<br>";
echo "Division is :"  . ( $num1 / $num2) . "<br>";
echo "Multiplication is :"  . ( $num1 * $num2) . "<br><br>";

// Simple Interest Calculation
$principal = 3000;
$rate = 4;
$time = 3;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal: $principal <br>";
echo "Rate: $rate% <br>";
echo "Time: $time years <br>";
echo "Simple Interest = $simpleInterest <br><br>";

// Area of Circle
$radius = 12;
$pi = 3.14;
$areaCircle = $pi * $radius * $radius;
echo "The area of the circle is $areaCircle <br>";

// Area of Rectangle
$length = 12;
$width = 8;
$areaRect = $length * $width;
echo "The area of the rectangle is $areaRect";
?>
