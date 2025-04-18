<?php
function isEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}
$result = isEvenOrOdd(7);
echo "The number 7 is: " . $result;
?>
