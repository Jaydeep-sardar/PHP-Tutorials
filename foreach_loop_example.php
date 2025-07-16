<?php
// foreach loop in PHP

$colors = array("Red", "Green", "Blue");
echo "Colors using foreach loop:\n";
foreach ($colors as $color) {
    echo "$color\n";
}

// Associative array example
$ages = array("John" => 25, "Alice" => 30, "Bob" => 22);
echo "\nAges using foreach loop:\n";
foreach ($ages as $name => $age) {
    echo "$name is $age years old\n";
}
?>
