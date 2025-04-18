<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function applyDiscount($percentage) {
        $discountAmount = ($this->price * $percentage) / 100;
        $this->price -= $discountAmount;
    }

    public function displayDetails() {
        return "Product: $this->name, Price: $" . number_format($this->price, 2);
    }
}

// Creating a product instance
$product = new Product("Laptop", 1200);
$product->applyDiscount(10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Product Details</h1>
    <p><?php echo $product->displayDetails(); ?></p>
</body>
</html>
