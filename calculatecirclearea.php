<?php
function calculateCircleArea($radius) {
    if ($radius <= 0) {
        return "Radius must be a positive number.";
    }
    
    $area = pi() * pow($radius, 2); 
    return $area;
}

// Example usage
$radius = 5;
$area = calculateCircleArea($radius);

echo "The area of a circle with radius $radius is: " . $area . " square units.";
?>