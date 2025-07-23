<?php
// Abstract class in PHP

abstract class Shape {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }
    abstract public function area();
    public function getColor() {
        return $this->color;
    }
}

class Circle extends Shape {
    public $radius;
    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }
    public function area() {
        return 3.14159 * $this->radius * $this->radius;
    }
}

$circle = new Circle("red", 5);
echo "Circle color: " . $circle->getColor() . "<br>";
echo "Circle area: " . $circle->area() . "<br>";
?>
