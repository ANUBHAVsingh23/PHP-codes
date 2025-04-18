<?php
function calculateCircleArea($radius) {
    $pi = 3.141592653589793;
    $area = $pi * pow($radius, 2);
    return $area;
}
$radius = 5;
echo "The area of a circle with radius $radius is " . calculateCircleArea($radius) . " square units.";
?>
<?php
function reverseNumber($number) {
    $numberStr = (string)$number;

    $reversedStr = strrev($numberStr);

    $reversedNumber = (int)$reversedStr;

    return $reversedNumber;
}

$number = 12345;
echo "The reverse of $number is " . reverseNumber($number);
?>
<?php
function convertToUppercase($string) {
    return strtoupper($string);
}

$string = "hello world";
echo "The uppercase of '$string' is '" . convertToUppercase($string) . "'.";
?>