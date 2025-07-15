<?php
// If condition in PHP

$number = 10;

if ($number > 5) {
    echo "$number is greater than 5\n";
}

// Example with else
if ($number < 5) {
    echo "$number is less than 5\n";
} else {
    echo "$number is not less than 5\n";
}

// Example with elseif
if ($number == 5) {
    echo "$number is equal to 5\n";
} elseif ($number > 5) {
    echo "$number is greater than 5\n";
} else {
    echo "$number is less than 5\n";
}
?>
