<?php
class Student {
    public $name;
    private $grades = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addGrade($grade) {
        $this->grades[] = $grade;
    }

    public function calculateAverage() {
        return array_sum($this->grades) / count($this->grades);
    }

    public function displayDetails() {
        return "Name: $this->name, Average Grade: " . number_format($this->calculateAverage(), 2);
    }
}

// Creating a student instance
$student = new Student("John Doe");
$student->addGrade(85);
$student->addGrade(90);
$student->addGrade(78);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Student Details</h1>
    <p><?php echo $student->displayDetails(); ?></p>
</body>
</html>
