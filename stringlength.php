<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];

    // Find string lengths
    $length1 = strlen($string1);
    $length2 = strlen($string2);

    // Check if strings are the same
    $areSame = ($string1 === $string2) ? "Yes" : "No";

    // Find the reverse of the strings
    $reverse1 = strrev($string1);
    $reverse2 = strrev($string2);
    
    // Concatenate the strings
    $concatenated = $string1 . $string2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="post" action="">
        String 1: <input type="text" name="string1" required><br>
        String 2: <input type="text" name="string2" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Results:</h2>
        <p>Length of String 1: <?php echo $length1; ?></p>
        <p>Length of String 2: <?php echo $length2; ?></p>
        <p>Are the strings the same? <?php echo $areSame; ?></p>
        <p>Reverse of String 1: <?php echo $reverse1; ?></p>
        <p>Reverse of String 2: <?php echo $reverse2; ?></p>
        <p>Concatenation of String 1 and String 2: <?php echo $concatenated; ?></p>
    <?php endif; ?>
</body>
</html>
