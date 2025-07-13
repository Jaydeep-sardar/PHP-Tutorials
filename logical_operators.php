<?php
// Logical Operators in PHP

$x = true;
$y = false;

// AND operator
echo "AND (x && y): " . ($x && $y ? "true" : "false") . "\n";
// OR operator
echo "OR (x || y): " . ($x || $y ? "true" : "false") . "\n";
// NOT operator
echo "NOT (!x): " . (!$x ? "true" : "false") . "\n";
// XOR operator
echo "XOR (x xor y): " . ($x xor $y ? "true" : "false") . "\n";
?>
