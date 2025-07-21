<?php
// Super global variables in PHP

echo "$_SERVER Example:<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br><br>";

$_GET['example'] = 'value'; // For demonstration only

echo "$_GET Example:<br>";
echo "Value of 'example': " . $_GET['example'] . "<br><br>";

$_POST['demo'] = 'test'; // For demonstration only

echo "$_POST Example:<br>";
echo "Value of 'demo': " . $_POST['demo'] . "<br><br>";

echo "$_COOKIE Example:<br>";
if (isset($_COOKIE['username'])) {
    echo "Username from cookie: " . $_COOKIE['username'] . "<br>";
} else {
    echo "Cookie 'username' is not set.<br>";
}

echo "$_SESSION Example:<br>";
session_start();
$_SESSION['user'] = 'admin';
echo "Session user: " . $_SESSION['user'] . "<br>";
?>
