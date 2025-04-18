<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operations in PHP</title>
</head>
<body>
    <h3>Bitwise Operations in PHP</h3>

    <?php
    function bitwiseAND($num1, $num2) {
        return $num1 & $num2;
    }
    function bitwiseOR($num1, $num2) {
        return $num1 | $num2;
    }
    function bitwiseXOR($num1, $num2) {
        return $num1 ^ $num2;
    }
    function bitwiseNOT($num) {
        return ~$num;
    }
    
    $num1 = 4;
    $num2 = 5;  
    echo "Bitwise AND of $num1 and $num2: " . bitwiseAND($num1, $num2) . "<br>";
    echo "Bitwise OR of $num1 and $num2: " . bitwiseOR($num1, $num2) . "<br>";
    echo "Bitwise XOR of $num1 and $num2: " . bitwiseXOR($num1, $num2) . "<br>";
    echo "Bitwise NOT of $num1: " . bitwiseNOT($num1) . "<br>";
    ?>
</body>
</html>