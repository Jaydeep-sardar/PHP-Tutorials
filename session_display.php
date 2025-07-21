<?php
// Display session variable
session_start();

if (isset($_SESSION["username"])) {
    echo "Session value: " . $_SESSION["username"] . "<br>";
} else {
    echo "Session variable is not set.<br>";
}
?>
