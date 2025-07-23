<?php
// Interface in PHP

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message<br>";
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        echo "Logging to database: $message<br>";
    }
}

$fileLogger = new FileLogger();
$fileLogger->log("File log message");

$dbLogger = new DatabaseLogger();
$dbLogger->log("Database log message");
?>
