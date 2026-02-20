<?php

class animal {
    public function eat() {
        echo "Animal is eating<br>";
    }
}

// Dog 'extends' animal, meaning it gets the 'eat' function for free
class Dog extends animal {
    public function bark() {
        echo "Dog is barking";
    }
}

class Cat extends animal {
    public function meow() {
        echo "Cat is meowing";
    }
}

$Dog = new dog();
$cat = new cat();

// Both objects can use the 'eat' method from the parent
$Dog->eat();
$Dog->bark();
echo "<br>";
$cat->eat();
$cat->meow();
?>
