<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Factorial Calculator</title>
</head>
<body>
<h2>Factorial Calculator</h2>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Calculate Factorial</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    function calculateFactorial($num) {
        if ($num == 0 || $num == 1) {
            return 1;
        } else {
            return $num * calculateFactorial($num - 1);
        }
    }
    if ($number < 0) {
        echo "<p style='color:red;'>Factorial is not defined for negative numbers.</p>";
    } else {
        $factorial = calculateFactorial($number);
        echo "<p>The factorial of $number is <strong>$factorial</strong></p>";
    }
}
?>
</body>
</html>