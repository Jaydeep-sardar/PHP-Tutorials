<?php
// Cookies in PHP

// Set a cookie
setcookie("user", "JaneDoe", time() + 3600, "/"); // Expires in 1 hour

echo "Setting cookie...<br>";

// Get cookie value
if (isset($_COOKIE["user"])) {
    echo "Cookie value: " . $_COOKIE["user"] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}
?>
