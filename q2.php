<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Accepting user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST['number'];
    $result = isPrime($inputNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
<h1>Anubhav Singh</h1>
<h1 style="color: blue;">Check if a Number is Prime</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($result)) {
        if ($result) {
            echo "<h2>$inputNumber is a prime number.</h2>";
        } else {
            echo "<h2>$inputNumber is not a prime number.</h2>";
        }
    }
    ?>
</body>
</html>
