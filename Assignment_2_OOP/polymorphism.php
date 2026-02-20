<?php

class Shape {
    public function area() {
        echo "Area not defined<br>";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Overriding the parent 'area' method
    public function area() {
        echo "Circle Area: " . (3.14 * $this->radius * $this->radius) . "<br>";
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    // Overriding the parent 'area' method
    public function area() {
        echo "Square Area: " . ($this->side * $this->side) . "<br>";
    }
}

$circle = new Circle(5);
$square = new Square(4);

$circle->area();
$square->area();
?>
