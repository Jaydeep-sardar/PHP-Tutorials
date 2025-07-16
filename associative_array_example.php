<?php
// Associative array in PHP

$student_marks = array(
    "John" => 85,
    "Alice" => 92,
    "Bob" => 78
);

echo "Student Marks:\n";
foreach ($student_marks as $name => $marks) {
    echo "$name scored $marks marks\n";
}
?>
