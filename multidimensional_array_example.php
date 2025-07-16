<?php
// Multidimensional array in PHP

$students = array(
    array("name" => "John", "marks" => 85),
    array("name" => "Alice", "marks" => 92),
    array("name" => "Bob", "marks" => 78)
);

echo "Student Details:\n";
foreach ($students as $student) {
    echo $student["name"] . " scored " . $student["marks"] . " marks\n";
}
?>
