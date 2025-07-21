<?php
// Date and time in PHP

echo "Current date: " . date("Y-m-d") . "<br>";
echo "Current time: " . date("H:i:s") . "<br>";

echo "Full date and time: " . date("Y-m-d H:i:s") . "<br>";

// Get timestamp
$timestamp = time();
echo "Current Unix timestamp: $timestamp<br>";

// Format a specific timestamp
$specific = mktime(15, 30, 0, 7, 21, 2025);
echo "Specific date and time: " . date("Y-m-d H:i:s", $specific) . "<br>";
?>
