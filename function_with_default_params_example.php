<?php
// Function with default parameters in PHP

function greet($name = "Guest") {
    echo "Hello, $name!\n";
}

greet("Alice"); // Output: Hello, Alice!
greet();        // Output: Hello, Guest!
?>
