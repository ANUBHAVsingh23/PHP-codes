<?php
// Function to sort an array
function sortArray($array, $order) {
    if ($order === 'asc') {
        sort($array);
    } else {
        rsort($array);
    }
    return $array;
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = explode(',', $_POST['numbers']);
    $order = $_POST['order'];
    $result = sortArray(array_map('intval', $numbers), $order);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Sort an Array of Integers</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" required>
        <br>
        <label for="order">Sort Order:</label>
        <select name="order">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
        <br>
        <input type="submit" value="Sort">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Sorted Array: " . implode(", ", $result) . "</h2>";
    }
    ?>
</body>
</html>
