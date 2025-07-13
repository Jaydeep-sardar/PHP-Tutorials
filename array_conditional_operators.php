<?php
// Array Operators and Conditional Operators in PHP

// Array Operators
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];

// Union
$union = $array1 + $array2;
echo "Union: ";
print_r($union);

// Equality
$isEqual = ($array1 == $array2);
echo "Equality: " . ($isEqual ? "true" : "false") . "\n";

// Identity
$isIdentical = ($array1 === $array2);
echo "Identity: " . ($isIdentical ? "true" : "false") . "\n";

// Conditional (Ternary) Operator
$age = 18;
echo "You are " . ($age >= 18 ? "an adult" : "a minor") . ".\n";
?>
