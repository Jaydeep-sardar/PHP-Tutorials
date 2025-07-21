<!DOCTYPE html>
<html>
<head>
    <title>Contact - My Basic PHP Website</title>
</head>
<body>
    <h1>Contact Us</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About</a> |
        <a href="contact.php">Contact</a>
    </nav>
    <hr>
    <form method="post" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Send">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);
        echo "<h3>Thank you, $name! Your message has been received:</h3>";
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
