<?php
// OOPs program in PHP

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        echo "Hello, my name is $this->name and I am $this->age years old.<br>";
    }
}

// Inheritance example
class Student extends Person {
    public $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function showId() {
        echo "My student ID is $this->studentId.<br>";
    }
}

$person = new Person("Alice", 30);
$person->greet();

$student = new Student("Bob", 20, "S12345");
$student->greet();
$student->showId();
?>
