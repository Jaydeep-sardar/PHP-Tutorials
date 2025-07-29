<?php
// Handle form and call class function in PHP
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $calc = new Calculator();
    $result = $calc->add($num1, $num2);
    echo "<h2>Result: $result</h2>";
} else {
    echo "No data submitted.";
}
?>
