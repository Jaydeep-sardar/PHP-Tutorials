<?php
// Set and get data from cookies in PHP

// Set a cookie
setcookie("username", "JohnDoe", time() + 3600, "/"); // Expires in 1 hour

// Get cookie data
if (isset($_COOKIE["username"])) {
    echo "Cookie value: " . $_COOKIE["username"] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}
?>
