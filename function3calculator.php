<?php
function arithmeticOperation($number1, $number2, $operation) {
    switch ($operation) {
        case 'add':
            return $number1 + $number2;
        case 'subtract':
            return $number1 - $number2;
        case 'divide':
            if ($number2 != 0) {
                return $number1 / $number2;
            } else {
                return "Error: Division by zero.";
            }
        case 'multiply':
            return $number1 * $number2;
        default:
            return "Error: Invalid operation.";
    }
}

function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$inputnum1 = 15;
$inputnum2 = 10;

echo "The sum of number $inputnum1 and $inputnum2 is: " . arithmeticOperation($inputnum1, $inputnum2, 'add') . '<br><br>';
echo "The subtraction of number $inputnum1 and $inputnum2 is: " . arithmeticOperation($inputnum1, $inputnum2, 'subtract') . '<br><br>';
echo "The division of number $inputnum1 and $inputnum2 is: " . arithmeticOperation($inputnum1, $inputnum2, 'divide') . '<br><br>';
echo "The multiplication of number $inputnum1 and $inputnum2 is: " . arithmeticOperation($inputnum1, $inputnum2, 'multiply') . '<br>';
function displayMessage($text, $color) {
    echo "<p style='color:" . $color . ";'>" . $text . "</p>";
}

displayMessage("This message is a red message", "red");
displayMessage("This message is a green message", "green");
displayMessage("This message is a blue message", "blue");
?>
