<?php
// Traits in PHP

trait Logger {
    public function log($message) {
        echo "Log: $message<br>";
    }
}

trait Greeter {
    public function greet($name) {
        echo "Hello, $name!<br>";
    }
}

class User {
    use Logger, Greeter;
}

$user = new User();
$user->log("User created.");
$user->greet("Alice");
?>
