<?php
// Function to count words, characters, and vowels
function countStringDetails($str) {
    $wordCount = str_word_count($str);
    $charCount = strlen($str);
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str);
    
    return [$wordCount, $charCount, $vowelCount];
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    list($words, $chars, $vowels) = countStringDetails($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Details Counter</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Count Words, Characters, and Vowels</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <input type="submit" value="Count">
    </form>

    <?php
    if (isset($words)) {
        echo "<h2>Words: $words, Characters: $chars, Vowels: $vowels</h2>";
    }
    ?>
</body>
</html>
