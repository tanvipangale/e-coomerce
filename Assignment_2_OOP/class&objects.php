<?php

class student {
    public $name;
    public $age;
}

$student1 = new student();

$student1->name = "Tanvi";
$student1->age = 19;

echo "My name is : " . $student1->name . "<br>";
echo "My age is : " . $student1->age;
?>
