<?php
// Function to perform string operations
function stringOperations($string) {
    $upper = strtoupper($string);
    $lower = strtolower($string);
    $length = strlen($string);
    $wordCount = str_word_count($string);
    $reversed = strrev($string);
    
    return [$upper, $lower, $length, $wordCount, $reversed];
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    list($upperCase, $lowerCase, $length, $wordCount, $reversed) = stringOperations($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>String Operations</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <input type="submit" value="Perform Operations">
    </form>

    <?php
    if (isset($upperCase)) {
        echo "<h2>Uppercase: $upperCase</h2>";
        echo "<h2>Lowercase: $lowerCase</h2>";
        echo "<h2>Length: $length</h2>";
        echo "<h2>Word Count: $wordCount</h2>";
        echo "<h2>Reversed: $reversed</h2>";
    }
    ?>
</body>
</html>
