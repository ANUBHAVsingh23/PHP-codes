<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Example</title>
</head>
<body>
    <h1>Sorting Array Examples</h1>

    <?php
    // Function to sort a multidimensional array by a specific key
    function sortByKey($array, $key) {
        usort($array, function($a, $b) use ($key) {
            return $a[$key] <=> $b[$key];
        });
        return $array;
    }

    // Function to sort an array according to a priority list
    function sortByPriority($array, $priority) {
        $priorityMap = array_flip($priority);
        usort($array, function($a, $b) use ($priorityMap) {
            return ($priorityMap[$a] ?? PHP_INT_MAX) <=> ($priorityMap[$b] ?? PHP_INT_MAX);
        });
        return $array;
    }

    // Associative array to sort
    $array = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];

    // Sorting the associative array
    echo "<h2>Associative Array Sorting</h2>";
    
    // Ascending order by value
    asort($array);
    echo "<h3>Ascending order by value:</h3>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    // Ascending order by key
    ksort($array);
    echo "<h3>Ascending order by key:</h3>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    // Reset array for next sort
    $array = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];

    // Descending order by value
    arsort($array);
    echo "<h3>Descending order by value:</h3>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    // Descending order by key
    krsort($array);
    echo "<h3>Descending order by key:</h3>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    // Example of sorting a multidimensional array
    $multidimensionalArray = [
        ["name" => "Sophia", "age" => 31],
        ["name" => "Jacob", "age" => 41],
        ["name" => "William", "age" => 39],
        ["name" => "Ramesh", "age" => 40],
    ];

    $sortedArray = sortByKey($multidimensionalArray, 'age');
    echo "<h2>Multidimensional Array Sorting by Age</h2>";
    echo "<pre>";
    print_r($sortedArray);
    echo "</pre>";

    // Example of sorting by priority
    $arrayToSort = ["apple", "banana", "cherry"];
    $priorityList = ["banana", "apple", "cherry"];
    $sortedByPriority = sortByPriority($arrayToSort, $priorityList);
    
    echo "<h2>Sorting by Priority</h2>";
    echo "<h3>Original Array:</h3>";
    echo "<pre>";
    print_r($arrayToSort);
    echo "</pre>";
    echo "<h3>Sorted by Priority:</h3>";
    echo "<pre>";
    print_r($sortedByPriority);
    echo "</pre>";
    ?>
</body>
</html>