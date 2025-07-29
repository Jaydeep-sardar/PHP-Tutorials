<?php
// Method chaining in PHP

class Calculator {
    private $result = 0;

    public function add($value) {
        $this->result += $value;
        return $this;
    }

    public function subtract($value) {
        $this->result -= $value;
        return $this;
    }

    public function multiply($value) {
        $this->result *= $value;
        return $this;
    }

    public function getResult() {
        return $this->result;
    }
}

$calc = new Calculator();
$result = $calc->add(10)->subtract(2)->multiply(3)->getResult();
echo "Result: $result<br>";
?>
