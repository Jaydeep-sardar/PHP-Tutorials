<?php
// Method overriding with traits in PHP

trait Logger {
    public function log() {
        echo "Trait Logger<br>";
    }
}

class Base {
    public function log() {
        echo "Base Logger<br>";
    }
}

class User extends Base {
    use Logger {
        Logger::log insteadof Base;
        Base::log as baseLog;
    }
}

$user = new User();
$user->log();      // Output: Trait Logger
$user->baseLog();  // Output: Base Logger
?>
