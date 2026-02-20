<?php
// COMPARISON & LOGIC
$age = 14;
$isMinor = true;

if ($age >= 18 && $isMinor) {
    echo "You can enter.<br><br>";
} else {
    echo "Access denied (you are a minor).<br><br>";
}

// Even / Odd Number Program
$num = 79;

if ($num / 2) {
    echo "The number is even<br><br>";
} else {
    echo "The number is odd<br><br>";
}

// Largest of 3 Numbers
$a = 79;
$b = 65;
$c = 97;

if ($a > $b  && $a > $c) {
    echo "79 is biggest";
} elseif ($b > $a  && $b > $c){
    echo "65 is biggest";
} else {
    echo "97 is biggest";
}
?>
