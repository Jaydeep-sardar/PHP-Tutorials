<?php
// Variable function in PHP

function sayHello() {
    echo "Hello from variable function!\n";
}

$func = "sayHello";
$func(); // Calls sayHello()

// Example with parameters
function add($a, $b) {
    echo "Sum: " . ($a + $b) . "\n";
}

$operation = "add";
$operation(3, 7); // Calls add(3, 7)
?>
