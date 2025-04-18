<?php
// Function to generate Fibonacci series
function fibonacci($limit) {
    $fib = [0, 1];
    while (count($fib) < $limit) {
        $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
    }
    return $fib;
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limit = $_POST['limit'];
    $result = fibonacci($limit);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Fibonacci Series Generator</h1>
    <form method="post" action="">
        <label for="limit">Enter the number of terms:</label>
        <input type="number" name="limit" required>
        <br>
        <input type="submit" value="Generate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h2>Fibonacci Series: " . implode(", ", $result) . "</h2>";
    }
    ?>
</body>
</html>
