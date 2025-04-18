<?php
// Function to replace a word in a string
function replaceWord($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    $searchWord = $_POST['search'];
    $replaceWord = $_POST['replace'];
    $result = replaceWord($inputString, $searchWord, $replaceWord);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Replacement</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Replace a Word in a String</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <label for="search">Word to Replace:</label>
        <input type="text" name="search" required>
        <br>
        <label for="replace">Replacement Word:</label>
        <input type="text" name="replace" required>
        <br>
        <input type="submit" value="Replace">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Updated String: $result</h2>";
    }
    ?>
</body>
</html>
