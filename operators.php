<?php
// Operators in PHP

$a = 10;
$b = 3;

// Arithmetic Operators
echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . ($a / $b) . "\n";
echo "Modulus: " . ($a % $b) . "\n";

// Assignment Operator
$c = $a;
echo "Assignment: c = $c\n";

// Comparison Operators
echo "Equal: " . ($a == $b ? "true" : "false") . "\n";
echo "Not Equal: " . ($a != $b ? "true" : "false") . "\n";
echo "Greater Than: " . ($a > $b ? "true" : "false") . "\n";
echo "Less Than: " . ($a < $b ? "true" : "false") . "\n";

// Logical Operators
$x = true;
$y = false;
echo "AND: " . ($x && $y ? "true" : "false") . "\n";
echo "OR: " . ($x || $y ? "true" : "false") . "\n";
echo "NOT: " . (!$x ? "true" : "false") . "\n";
?>
