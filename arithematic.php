<?php
// Define two numbers
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
$difference = $num1-$num2;
$product = $num1 * $num2;
$quotient = ($num2!=0)?($num1/$num2) : "undefined"; 
// Display the results
echo "Numbers: $num1 and $num2<br>";
echo "Addition: $num1 + $num2=$sum<br>";
echo "Subtraction: $num1-$num2=$difference<br>";
echo "Multiplication: $num1*$num2=$product<br>";
echo "Division: $num1/$num2=$quotient<br>";
?>
<?php
$name="John";
$age=25;
$price=99.99;
$is_happy= true;
$fruit=array("apple","banana","mango");
$car=null;
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($price);
echo "<br>";
var_dump($is_happy);
echo "<br>";
var_dump($fruit);
echo "<br>";
var_dump($car);
?>
