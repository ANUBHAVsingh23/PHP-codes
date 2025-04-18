<?php
class Recipe {
    public $name;
    public $ingredients = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function displayIngredients() {
        return implode(", ", $this->ingredients);
    }
}

// Creating a recipe instance
$recipe = new Recipe("Pasta");
$recipe->addIngredient("Pasta");
$recipe->addIngredient("Tomato Sauce");
$recipe->addIngredient("Cheese");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Recipe: <?php echo $recipe->name; ?></h1>
    <h2>Ingredients: <?php echo $recipe->displayIngredients(); ?></h2>
</body>
</html>
