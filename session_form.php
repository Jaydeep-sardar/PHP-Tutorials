<?php
// Set session variable from HTML form
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $_SESSION["username"] = $_POST["username"];
    echo "Session set for username: " . $_SESSION["username"] . "<br>";
    echo '<a href="session_display.php">Display Session Value</a>';
} else {
    echo "No data submitted.";
}
?>
