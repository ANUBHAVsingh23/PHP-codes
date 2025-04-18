<?php
// Anonymous function to check even or odd
$checkEvenOdd = function($number) {
    return ($number % 2 == 0) ? "Even" : "Odd";
};

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST['number'];
    $result = $checkEvenOdd($inputNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Anubhav Singh</h1>
    <h1 style="color: blue;">Check if a Number is Even or Odd</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>The number is: $result</h2>";
    }
    ?>
</body>
</html>
