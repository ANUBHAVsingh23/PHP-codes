<?php
class ShoppingCart {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function removeProduct($productName) {
        foreach ($this->products as $key => $product) {
            if ($product->name === $productName) {
                unset($this->products[$key]);
                return true;
            }
        }
        return false;
    }

    public function displayCart() {
        foreach ($this->products as $product) {
            echo $product->displayDetails() . "<br>";
        }
    }
}

// Creating shopping cart instance and adding products
$cart = new ShoppingCart();
$cart->addProduct(new Product("Laptop", 1200));
$cart->addProduct(new Product("Phone", 800));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Your Shopping Cart</h1>
    <div>
        <?php $cart->displayCart(); ?>
    </div>
</body>
</html>
