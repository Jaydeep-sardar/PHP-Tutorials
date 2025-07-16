<?php
// Display array data in HTML table in PHP

$students = array(
    array("name" => "John", "marks" => 85),
    array("name" => "Alice", "marks" => 92),
    array("name" => "Bob", "marks" => 78)
);

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Marks</th></tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["name"] . "</td>";
    echo "<td>" . $student["marks"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
