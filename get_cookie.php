<?php
// Get cookie value
if (isset($_COOKIE["username"])) {
    echo "Cookie value: " . $_COOKIE["username"] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}
?>
