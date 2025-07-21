<?php
// Read a file with PHP

$filename = "example.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "File contents:<br>";
    echo nl2br($content);
} else {
    echo "File '$filename' does not exist.<br>";
}
?>
