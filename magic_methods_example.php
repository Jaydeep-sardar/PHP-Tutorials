<?php
// Magic methods in PHP

class Demo {
    public $data = array();

    // __construct
    public function __construct() {
        echo "Object created<br>";
    }

    // __set
    public function __set($name, $value) {
        $this->data[$name] = $value;
        echo "Set $name to $value<br>";
    }

    // __get
    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

    // __call
    public function __call($name, $arguments) {
        echo "Method $name does not exist. Arguments: ";
        print_r($arguments);
        echo "<br>";
    }

    // __toString
    public function __toString() {
        return "Demo object as string";
    }
}

$obj = new Demo();
$obj->foo = "bar"; // __set
echo $obj->foo . "<br>"; // __get
$obj->nonExistentMethod(1, 2, 3); // __call
echo $obj; // __toString
?>
