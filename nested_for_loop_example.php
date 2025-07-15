<?php
// Nested for loop in PHP

echo "Multiplication tables from 1 to 3:\n";
for ($i = 1; $i <= 3; $i++) {
    echo "\nTable of $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "$i x $j = $result\n";
    }
}
?>
