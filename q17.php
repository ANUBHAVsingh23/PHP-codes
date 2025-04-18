<?php
// Function to merge arrays and remove duplicates
function mergeArrays($array1, $array2) {
    return array_unique(array_merge($array1, $array2));
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array1 = explode(',', $_POST['array1']);
    $array2 = explode(',', $_POST['array2']);
    $result = mergeArrays(array_map('trim', $array1), array_map('trim', $array2));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Arrays</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Merge Two Arrays</h1>
    <form method="post" action="">
        <label for="array1">Enter first array (comma-separated):</label>
        <input type="text" name="array1" required>
        <br>
        <label for="array2">Enter second array (comma-separated):</label>
        <input type="text" name="array2" required>
        <br>
        <input type="submit" value="Merge">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Merged Array: " . implode(", ", $result) . "</h2>";
    }
    ?>
</body>
</html>
