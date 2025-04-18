<?php
// Function to find max and min
function findMaxMin($array) {
    return [max($array), min($array)];
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = explode(',', $_POST['numbers']);
    $result = findMaxMin(array_map('intval', $numbers));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max and Min Finder</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Find Maximum and Minimum Values</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" required>
        <br>
        <input type="submit" value="Find">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Maximum Value: $result[0]</h2>";
        echo "<h2>Minimum Value: $result[1]</h2>";
    }
    ?>
</body>
</html>
