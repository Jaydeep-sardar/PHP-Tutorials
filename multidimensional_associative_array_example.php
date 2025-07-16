<?php
// Multidimensional associative array in PHP

$students = array(
    "John" => array("math" => 85, "science" => 90, "english" => 78),
    "Alice" => array("math" => 92, "science" => 88, "english" => 95),
    "Bob" => array("math" => 78, "science" => 80, "english" => 85)
);

echo "Student Marks (Multidimensional Associative Array):\n";
foreach ($students as $name => $subjects) {
    echo "$name: ";
    foreach ($subjects as $subject => $marks) {
        echo "$subject = $marks; ";
    }
    echo "\n";
}
?>
