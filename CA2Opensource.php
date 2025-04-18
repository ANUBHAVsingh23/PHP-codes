<?php
// 1. PHP Program Demonstrating Inheritance
class Vehicle {
    public function move() {
        return "The vehicle is moving.";
    }
}

class Car extends Vehicle {
    public function fuelType() {
        return "The car uses gasoline.";
    }
}

// Example usage
$myCar = new Car();
echo $myCar->move(); 
echo "<br>";
echo $myCar->fuelType(); 
echo "<br><br>"; 

// 2. PHP Program to Merge Two Arrays and Remove Duplicates
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

$mergedArray = array_merge($array1, $array2);
$uniqueArray = array_unique($mergedArray);

print_r($uniqueArray); 
echo "<br><br>"; 

// 3. PHP Script to Find Maximum and Minimum Values from an Array
function findMaxMin($arr) {
    $max = $arr[0];
    $min = $arr[0];

    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }

    return ["max" => $max, "min" => $min];
}

$array = [3, 5, 1, 8, 2];
$result = findMaxMin($array);
echo "Maximum: " . $result["max"] . ", Minimum: " . $result["min"]; 
echo "<br><br>"; 

// 4. PHP Login Page

