<?php
// Function to reverse a string
function reverseString($str) {
    $reversed = '';
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['string'];
    $result = reverseString($inputString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reversal</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Reverse a String</h1>
    <form method="post" action="">
        <label for="string">Enter a String:</label>
        <input type="text" name="string" required>
        <br>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Reversed String: $result</h2>";
    }
    ?>
</body>
</html>
