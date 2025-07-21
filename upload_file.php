<?php
// File upload handling in PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir);
        }
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully: " . htmlspecialchars($_FILES["file"]["name"]) . "<br>";
        } else {
            echo "Error uploading file.<br>";
        }
    } else {
        echo "No file selected.<br>";
    }
} else {
    echo "Invalid request method.";
}
?>
