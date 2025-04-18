<?php
// Base class
class Vehicle {
    // Method to demonstrate movement
    public function move() {
        return "The vehicle is moving.";
    }
}

// Derived class
class Car extends Vehicle {
    // Method to return the fuel type
    public function fuelType() {
        return "The car runs on gasoline.";
    }
}

// Creating an instance of Car
$myCar = new Car();

// Demonstrating the methods
echo $myCar->move();      // Output: The vehicle is moving.
echo "\n";
echo $myCar->fuelType();  // Output: The car runs on gasoline.
?>
