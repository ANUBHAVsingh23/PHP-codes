<?php
// Function to extract numeric values
function extractNumbers($string) {
    preg_match_all('/\d+/', $string, $matches);
    return $matches[0];
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    $result = extractNumbers($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extract Numbers</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Extract Numeric Values from a String</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <input type="submit" value="Extract">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Extracted Numbers: " . implode(", ", $result) . "</h2>";
    }
    ?>
</body>
</html>
