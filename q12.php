<?php
// Function to count frequency of a character
function charFrequency($string, $char) {
    return substr_count($string, $char);
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    $charToCount = $_POST['char'];
    $result = charFrequency($inputString, $charToCount);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Frequency</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Character Frequency Counter</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <label for="char">Character to Count:</label>
        <input type="text" name="char" required maxlength="1">
        <br>
        <input type="submit" value="Count">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Frequency of '$charToCount': $result</h2>";
    }
    ?>
</body>
</html>
