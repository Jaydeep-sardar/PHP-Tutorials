<?php
// PHP script to handle HTML form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "<h2>Form Data Received:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    echo "No data submitted.";
}
?>
