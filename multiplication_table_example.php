<?php
// Multiplication table using loops in PHP

$number = 5;
echo "Multiplication table of $number:\n";
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result\n";
}
?>
