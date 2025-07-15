<?php
// Logical operators in PHP

$a = true;
$b = false;

// AND operator
if ($a && $b) {
    echo "Both a and b are true\n";
} else {
    echo "AND: At least one is false\n";
}

// OR operator
if ($a || $b) {
    echo "OR: At least one is true\n";
} else {
    echo "Neither a nor b is true\n";
}

// NOT operator
if (!$b) {
    echo "NOT: b is false\n";
}

// XOR operator
if ($a xor $b) {
    echo "XOR: Only one is true\n";
}
?>
