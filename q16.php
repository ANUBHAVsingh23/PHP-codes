<?php
// Sample student records
$students = [
    ["name" => "Alice", "marks" => 85, "subject" => "Math"],
    ["name" => "Bob", "marks" => 78, "subject" => "Science"],
    ["name" => "Charlie", "marks" => 92, "subject" => "English"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Student Records</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Marks</th>
            <th>Subject</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['marks']; ?></td>
            <td><?php echo $student['subject']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
