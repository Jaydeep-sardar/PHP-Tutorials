<?php
// Set cookie from form input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    setcookie("username", $username, time() + 3600, "/"); // Expires in 1 hour
    echo "Cookie set for username: $username<br>";
    echo '<a href="get_cookie.php">Check Cookie Value</a>';
} else {
    echo "No data submitted.";
}
?>
