<?php
// Sample student grades
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "David" => 67,
    "Eve" => 88
];

// Calculate statistics
$average = array_sum($students) / count($students);
$highest = max($students);
$lowest = min($students);
$belowAverage = array_filter($students, function($grade) use ($average) {
    return $grade < $average;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades Statistics</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Student Grades Statistics</h1>
    <h2>Average Grade: <?php echo $average; ?></h2>
    <h2>Highest Grade: <?php echo $highest; ?></h2>
    <h2>Lowest Grade: <?php echo $lowest; ?></h2>
    <h2>Students Below Average:</h2>
    <ul>
        <?php foreach ($belowAverage as $name => $grade): ?>
            <li><?php echo $name; ?> (<?php echo $grade; ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
