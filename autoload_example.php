<?php
// Autoload class in PHP

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Example class file: MyClass.php
// class MyClass {
//     public function sayHello() {
//         echo "Hello from MyClass!<br>";
//     }
// }

// Usage
$myObj = new MyClass();
$myObj->sayHello();
?>
