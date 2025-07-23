<?php
// Access modifiers in PHP

class Demo {
    public $publicVar = "I am public";
    protected $protectedVar = "I am protected";
    private $privateVar = "I am private";

    public function showVars() {
        echo $this->publicVar . "<br>";
        echo $this->protectedVar . "<br>";
        echo $this->privateVar . "<br>";
    }
}

class ChildDemo extends Demo {
    public function showProtected() {
        echo $this->protectedVar . "<br>";
        // echo $this->privateVar; // Not accessible
    }
}

$obj = new Demo();
$obj->showVars();
echo $obj->publicVar . "<br>"; // Accessible
// echo $obj->protectedVar; // Not accessible
// echo $obj->privateVar; // Not accessible

$child = new ChildDemo();
$child->showProtected();
?>
