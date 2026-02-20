<?php
  
// 1. Defining various data types
$name = "Tanvi";   
$age = 19;           
$height = 153.2;     
$isMinor = false;   

echo "Name : $name <br>";
echo "Age : $age <br>";
echo "Height : $height <br>";
echo "Is a Minor? : " . ($isMinor ? "Yes" : "No") . "<br><br>";

// 2. Swapping Two Numbers
$a = 5;
$b = 10;

echo "--- Before Swapping ---<br>";
echo "a = $a, b = $b <br>";

$tempVar = $a; 
$a = $b;       
$b = $tempVar; 

echo "--- After Swapping ---<br>";
echo "a = $a, b = $b";
?>
