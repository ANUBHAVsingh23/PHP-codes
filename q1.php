//
<?php
// Function to determine the larger number
function findLargerNumber($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } elseif ($num2 > $num1) {
        return $num2;
    } else {
        return "Both numbers are equal.";
    }
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $result = findLargerNumber($number1, $number2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larger Number Finder</title>
</head>
<body>
    <h1>Anubhav Singh</h1>
    <h1 style="color: blue;">Find the Larger Number</h1>
        <form method="post" action="">
        <label for="number1">Enter First Number:</label>
        <input type="number" name="number1" required>
        <br>
        <label for="number2">Enter Second Number:</label>
        <input type="number" name="number2" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>The larger number is: $result</h2>";
    }
    ?>
</body>
</html>
