<?php
// Create a file with PHP

$filename = "example.txt";
$content = "This file was created using PHP.";

if (file_put_contents($filename, $content) !== false) {
    echo "File '$filename' created successfully.<br>";
} else {
    echo "Error creating file.<br>";
}
?>
