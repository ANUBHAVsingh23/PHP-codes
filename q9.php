<?php
// Function to convert temperature
function convertTemperature($temp, $unit) {
    if ($unit === 'C') {
        return ($temp * 9/5) + 32; // Celsius to Fahrenheit
    } else {
        return ($temp - 32) * 5/9; // Fahrenheit to Celsius
    }
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $unit = $_POST['unit'];
    $result = convertTemperature($temperature, $unit);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" required>
        <select name="unit">
            <option value="C">Celsius to Fahrenheit</option>
            <option value="F">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Converted Temperature: $result</h2>";
    }
    ?>
</body>
</html>
