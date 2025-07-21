<?php
// Session in PHP

session_start();

// Set session variable
$_SESSION["username"] = "JaneDoe";

echo "Session variable 'username' is set.<br>";

// Get session variable
if (isset($_SESSION["username"])) {
    echo "Session value: " . $_SESSION["username"] . "<br>";
} else {
    echo "Session variable is not set.<br>";
}
?>
