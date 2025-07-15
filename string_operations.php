<?php
// String and its operations in PHP

// 1. Creating strings
$str1 = "Hello, World!";
$str2 = 'PHP is awesome!';

// 2. String concatenation
$combined = $str1 . " " . $str2;
echo "Concatenated: $combined\n";

// 3. String length
$length = strlen($str1);
echo "Length of str1: $length\n";

// 4. Changing case
$upper = strtoupper($str2);
$lower = strtolower($str2);
echo "Uppercase: $upper\n";
echo "Lowercase: $lower\n";

// 5. Substring
$sub = substr($str1, 7, 5);
echo "Substring of str1: $sub\n";

// 6. Replace
$replaced = str_replace("World", "PHP", $str1);
echo "Replaced: $replaced\n";

// 7. Find position
$pos = strpos($str2, "awesome");
echo "Position of 'awesome' in str2: $pos\n";

// 8. Trim whitespace
$whitespace = "   Hello PHP   ";
echo "Trimmed: '" . trim($whitespace) . "'\n";

// 9. Split string
$csv = "apple,banana,orange";
$fruits = explode(",", $csv);
echo "Fruits: ";
print_r($fruits);

// 10. Join array to string
$joined = implode(" | ", $fruits);
echo "Joined: $joined\n";
?>
