<?php
// Get list of files and folders in a directory in PHP

$dir = "uploads/";

echo "Contents of 'uploads' directory:<br>";
if (is_dir($dir)) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item != "." && $item != "..") {
            if (is_dir($dir . $item)) {
                echo "[Folder] " . $item . "<br>";
            } else {
                echo "[File] " . $item . "<br>";
            }
        }
    }
} else {
    echo "Directory does not exist.";
}
?>
