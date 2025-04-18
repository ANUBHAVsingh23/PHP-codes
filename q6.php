<?php
// Function to sum array elements
function sumArray($array) {
    return array_sum($array);
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = explode(',', $_POST['numbers']);
    $result = sumArray(array_map('intval', $numbers));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Array</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Sum of Array Elements</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Sum of the numbers is: $result</h2>";
    }
    ?>
</body>
</html>
