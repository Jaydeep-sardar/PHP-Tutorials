<?php
// Type hinting in PHP

function add(int $a, int $b): int {
    return $a + $b;
}

echo "Sum: " . add(5, 7) . "<br>";

function greet(string $name): void {
    echo "Hello, $name!<br>";
}

greet("Alice");

class Product {
    public string $name;
    public float $price;
    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new Product("Book", 12.99);
echo "Product: $product->name, Price: $product->price<br>";
?>
