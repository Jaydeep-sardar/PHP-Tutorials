<?php
// Inheritance in PHP

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        echo "$this->name makes a sound.<br>";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "$this->name barks.<br>";
    }
}

$animal = new Animal("Generic Animal");
$animal->speak();

$dog = new Dog("Buddy");
$dog->speak();
?>
