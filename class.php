<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class Car {
    // Properties
    public $color;
    public $model;
    public $year;

    // Constructor
    public function __construct($color, $model, $year) {
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        return "Car Model: $this->model, Color: $this->color, Year: $this->year";
    }
}

// Creating an object of the Car class
$myCar = new Car("Red", "Toyota", 2020);

// Displaying the details of the car
echo $myCar->displayDetails();
?>
