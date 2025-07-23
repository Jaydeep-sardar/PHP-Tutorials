<?php
// Constants in PHP OOP

class MathConstants {
    const PI = 3.14159;
    const E = 2.71828;

    public function showConstants() {
        echo "PI: " . self::PI . "<br>";
        echo "Euler's number: " . self::E . "<br>";
    }
}

// Accessing class constants
MathConstants::showConstants(); // This will cause an error because showConstants is not static

// Correct way:
$obj = new MathConstants();
$obj->showConstants();

// Global constant
define("SITE_NAME", "My PHP Site");
echo "Site Name: " . SITE_NAME . "<br>";
?>
