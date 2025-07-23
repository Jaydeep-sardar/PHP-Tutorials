<?php
// Constructor in PHP

class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        echo "Car created: $brand $model<br>";
    }

    public function display() {
        echo "This is a $this->brand $this->model.<br>";
    }
}

$car1 = new Car("Toyota", "Corolla");
$car1->display();

$car2 = new Car("Honda", "Civic");
$car2->display();
?>
