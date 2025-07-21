<?php
// Fetching files from local system (listing files in a directory)

$dir = "uploads/";

echo "Files in 'uploads' directory:<br>";
if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory does not exist.";
}
?>
