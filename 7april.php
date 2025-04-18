<?php
// Class Definition for Book
class Book {
    // Properties
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    public function displayDetails() {
        return "Title: " . $this->title . "<br>" .
               "Author: " . $this->author . "<br>" .
               "Price: Rs " . $this->price . "<br>";
    }
}
$myBook = new Book("Madhushala", "Harivansh Rai Bachchan", 1000);
echo $myBook->displayDetails();
$myBook = new Book("Gaban", "Munshi Premchand", 540);
echo $myBook->displayDetails();
?>

//2
<?php
// Class Definition for Car
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        return "Make: " . $this->make . "<br>" .
               "Model: " . $this->model . "<br>" .
               "Year: " . $this->year . "<br>";
    }
}

// Class Definition for ElectricCar that extends Car
class ElectricCar extends Car {
    public $batteryCapacity; // Additional property for ElectricCar

    // Constructor
    public function __construct($make, $model, $year, $batteryCapacity) {
        // Call parent constructor
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Overriding displayDetails to include battery capacity
    public function displayDetails() {
        $details = parent::displayDetails(); // Get car details from parent
        $details .= "Battery Capacity: " . $this->batteryCapacity . " kWh<br>";
        return $details;
    }
}

// Example usage of Car class
$myCar = new Car("Toyota", "Camry", 2020);
echo $myCar->displayDetails();
echo "<br>";

// Example usage of ElectricCar class
$myElectricCar = new ElectricCar("Tesla", "Model S", 2023, 100);
echo $myElectricCar->displayDetails();
?>


