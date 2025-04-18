<?php
$name ="Mohit";
echo "<h1 style = 'color:red'>Hello, World! $name</h1>"
?>
<?php  // program to check a odd number 
$number = 7;
if($number/2==0)
{
    echo"$number is even";
}
else
{
    echo"$number is odd\n";
}
?>
<?php // program to check a number is a leap year
$year = 1800;
if(($year%4==0 && $year%100!=0) || $year%400==0)
{
    echo"$year is a leap year";
}
else
{
    echo"$year is not a leap year";
}
?>
