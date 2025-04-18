<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fruits = array("Apple", "Banana", "Cherry","Mango");
echo $fruits[0]."<br>"; 
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
?>

<?php
echo"I like".$fruits[0].",".$fruits[1].",".$fruits[2].",and".$fruits[3].".";
?>
<?php
$colors = ["Red", "Green", "Blue","Yellow"];
for($i=0;$i<4;$i++)
    echo $colors[$i]."<br>";
?>
<?php
function sortMultiDimensionalArrayByKey($array, $key, $order = SORT_ASC) {
    usort($array, function($a, $b) use ($key, $order) {
        if ($order == SORT_ASC) {
            return $a[$key] <=> $b[$key];
        } else {
            return $b[$key] <=> $a[$key];
        }
    });
    return $array;
}

// Example usage:
$data = [
    ['name' => 'Alice', 'age' => 30],
    ['name' => 'Bob', 'age' => 25],
    ['name' => 'Charlie', 'age' => 35],
];

$sortedAsc = sortMultiDimensionalArrayByKey($data, 'age');
print_r($sortedAsc);

$sortedDesc = sortMultiDimensionalArrayByKey($data, 'age', SORT_DESC);
print_r($sortedDesc);
?>
<?php
function sortByPriority($array, $priority) {
    $priorityMap = array_flip($priority); // Create a map of priority values to their indices
    uksort($array, function($a, $b) use ($priorityMap) {
        $priorityA = isset($priorityMap[$a]) ? $priorityMap[$a] : PHP_INT_MAX;
        $priorityB = isset($priorityMap[$b]) ? $priorityMap[$b] : PHP_INT_MAX;
        return $priorityA <=> $priorityB;
    });
    return $array;
}

// Example usage:
$data = ['apple' => 1, 'banana' => 2, 'cherry' => 3, 'date' => 4];
$priority = ['cherry', 'banana', 'apple'];

$sorted = sortByPriority($data, $priority);
print_r($sorted);
?>

<?php
$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// a) Ascending order sort by value
asort($data);
echo "Ascending by value: ";
print_r($data);

// b) Ascending order sort by key
ksort($data);
echo "Ascending by key: ";
print_r($data);

// c) Descending order sort by value
arsort($data);
echo "Descending by value: ";
print_r($data);

// d) Descending order sort by key
krsort($data);
echo "Descending by key: ";
print_r($data);
?>
// counting of array elements
<?php
$fruits = array("Apple", "Banana", "Cherry","Mango");   
echo count($fruits);
?>
//create an associative array representing a person's info ,including name, age, and email
<?php   
$person = array("name"=>"Anubhav", "age"=>21, "email"=>"
singh.anubhav3945@gmail.com");
echo "Name: ".$person['name']."<br>";
echo "Age: ".$person['age']."<br>";
echo "Email: ".$person['email']."<br>";
?>
//multidimentional array
<?php
$employees = [
    [1, "Krishna", "Manager", 50000],
    [2, "Arjun", "Developer", 45000],
    [3, "Ravi", "Designer", 40000],
    [4, "Sita", "HR", 42000],
    [5, "Mohan", "Accountant", 38000]
];

foreach ($employees as $employee) {
    echo "ID: $employee[0], Name: $employee[1], Position: $employee[2], Salary: $employee[3]<br>";
}
?>

</body>
</html>

