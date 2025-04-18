<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    class student{
        public $name;
        public $rollno;
        public $grade;

        public function __construct($name, $rollno, $grade)
        {
            $this->name = $name;
            $this->rollno = $rollno;
            $this->grade = $grade;
        }

        public function display(){
            echo "Name: " .$this->name . "\n";
            echo "Rollno: " .$this->rollno . "\n";
            echo "Name: " .$this->grade . "\n";

        }
}
     
    $student  =  new student("Manish Kumar", 41, "A");
    $student->display();



    ?>
</body>
</html>