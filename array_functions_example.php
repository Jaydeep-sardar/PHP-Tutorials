<?php
// PHP array functions examples

$numbers = array(5, 2, 8, 1, 9);
$fruits = array("Apple", "Banana", "Orange", "Mango");

// count()
echo "Count: " . count($numbers) . "\n";

// sort()
sort($numbers);
echo "Sorted numbers: ";
print_r($numbers);

// array_push()
array_push($fruits, "Grapes");
echo "After array_push: ";
print_r($fruits);

// array_pop()
$popped = array_pop($fruits);
echo "Popped element: $popped\n";

// array_merge()
$merged = array_merge($numbers, $fruits);
echo "Merged array: ";
print_r($merged);

// in_array()
echo "Is 8 in numbers? ";
echo in_array(8, $numbers) ? "Yes\n" : "No\n";

// array_search()
$index = array_search("Banana", $fruits);
echo "Index of Banana: $index\n";

// array_reverse()
$reversed = array_reverse($numbers);
echo "Reversed numbers: ";
print_r($reversed);

// array_slice()
slice = array_slice($fruits, 1, 2);
echo "Sliced fruits: ";
print_r($slice);

// array_keys()
$keys = array_keys($fruits);
echo "Keys of fruits: ";
print_r($keys);

// array_values()
$values = array_values($fruits);
echo "Values of fruits: ";
print_r($values);

// array_unique()
$unique = array_unique(array("a", "b", "a", "c"));
echo "Unique values: ";
print_r($unique);
?>
