<?php
// Typecasting in PHP

// Integer to string
$num = 123;
$str = (string)$num;
echo "Integer to string: ";
var_dump($str);

// String to integer
$str2 = "456";
$int = (int)$str2;
echo "String to integer: ";
var_dump($int);

// Float to integer
$float = 12.34;
$int2 = (int)$float;
echo "Float to integer: ";
var_dump($int2);

// Boolean to integer
$bool = true;
$int3 = (int)$bool;
echo "Boolean to integer: ";
var_dump($int3);
?>
