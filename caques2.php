<?php
class Student {
    public $name;
    public $rollNo;
    public $grade;

    // Constructor to initialize properties
    public function __construct($name, $rollNo, $grade) {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->grade = $grade;
    }

    // Method to display student details
    public function displayDetails() {
        echo "Name: " . $this->name . "\n";
        echo "Roll No: " . $this->rollNo . "\n";
        echo "Grade: " . $this->grade . "\n";
    }
}

// Example usage
$student = new Student("John Doe", 101, "A");
$student->displayDetails();
?>