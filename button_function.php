<?php
// Call function on button click in PHP
function showMessage() {
    echo "Button was clicked! Function executed.<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["callFunc"])) {
    showMessage();
} else {
    echo "Click the button to call the function.";
}
?>
