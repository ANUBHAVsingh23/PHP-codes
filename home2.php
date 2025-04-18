<?php
class Car {
    // Properties
    private $make;
    private $model;
    private $year;
    private $isRunning = false;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to start the car
    public function start() {
        $this->isRunning = true;
        return "The car has started.";
    }

    // Method to stop the car
    public function stop() {
        $this->isRunning = false;
        return "The car has stopped.";
    }

    // Method to display car information
    public function displayInfo() {
        return "Car: {$this->year} {$this->make} {$this->model}";
    }
}

// Creating an instance of Car
$myCar = new Car("Toyota", "Camry", 2020);

// Demonstrating setting properties and calling methods
echo $myCar->displayInfo(); // Output: Car: 2020 Toyota Camry
echo "\n";
echo $myCar->start();        // Output: The car has started.
echo "\n";
echo $myCar->stop();         // Output: The car has stopped.
?>
//2

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            if (username === "") {
                alert("Username cannot be empty.");
                return false; // Prevent form submission
            }
            return true; 
        }
    </script>
</head>
<body>
    <form onsubmit="return validateForm();" action="home2.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
// check_username
