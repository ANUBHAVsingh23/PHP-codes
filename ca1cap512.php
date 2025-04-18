// Employee Salary Calculator
<?php

function calculateTax($salary) {
    return ($salary > 50000) ? $salary * 0.10 : $salary * 0.05;
}

function calculatePF($salary) {
    return $salary * 0.12;
}

function calculateHRA($salary) {
    return $salary * 0.15;
}

function calculateDA($salary) {
    return $salary * 0.10;
}

function calculateNetSalary($salary) {
    $tax = calculateTax($salary);
    $pf = calculatePF($salary);
    $hra = calculateHRA($salary);
    $da = calculateDA($salary);
    
    $netSalary = $salary + $hra + $da - $tax - $pf;
    return $netSalary;
}

$basicSalary = 100000; // Default value

echo "Employee Salary Calculator\n";
echo "Basic Salary: ₹$basicSalary\n";
echo "Net Salary: ₹" . calculateNetSalary($basicSalary) . "\n";

?>


// Student Grade Calculator
<?php

function calculateGrade($average) {
    if ($average >= 90) return 'A';
    if ($average >= 75) return 'B';
    if ($average >= 60) return 'C';
    if ($average >= 40) return 'D';
    return 'Fail';
}

$marks = [85, 78, 92, 67, 88]; // Default values for 5 subjects
$total = array_sum($marks);
$average = $total / count($marks);
$grade = calculateGrade($average);

echo "Student Grade Calculator\n";
echo "Total Marks: $total\n";
echo "Average Marks: $average\n";
echo "Final Grade: $grade\n";

?>