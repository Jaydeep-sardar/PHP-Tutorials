<?php
// Data types in PHP

$integer = 42;
$float = 3.14;
$string = "Hello, PHP!";
$boolean = true;
$array = [1, 2, 3];
$null = null;

// Output data types
echo "Integer: $integer\n";
echo "Float: $float\n";
echo "String: $string\n";
echo "Boolean: " . ($boolean ? "true" : "false") . "\n";
echo "Array: ";
print_r($array);
echo "Null: ";
var_dump($null);
?>
