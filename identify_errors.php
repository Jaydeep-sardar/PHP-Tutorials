<?php
// Identifying errors in PHP
// Example with intentional error

// Uncomment the line below to see a syntax error
// echo "Missing semicolon"

// Example with runtime error
$number = 10;
// Uncomment the line below to see undefined variable error
// echo $undefinedVar;

// Error reporting settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Correct code
echo "Number: $number\n";
?>
