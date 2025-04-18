<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sum of Digits Calculator</title>
</head>
<body>
<h2>Sum of Digits Calculator</h2>
<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Calculate Sum of Digits</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    function calculateSumOfDigits($num) {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = intval($num / 10); 
        }
        return $sum;
    }

    if ($number < 0) {
        echo "<p style='color:red;'>Please enter a non-negative number.</p>";
    } else {
        $sumOfDigits = calculateSumOfDigits($number);
        echo "<p>The sum of the digits of $number is <strong>$sumOfDigits</strong></p>";
    }
}
?>
</body>
</html>