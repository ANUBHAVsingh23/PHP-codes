<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $fullName = "Manish Kumar";
    $age = 22;
    $address = "Mbn Karnal,Haryana";

    $contactcard  = 'Contact Card:'."\n";
    $contactcard .= 'Name: '. $fullName . "\n";
    $contactcard .= "Age :  $age  \n";
    $contactcard .= "address: ". $address . "\n";

    echo nl2br($contactcard);
    ?>
</body>
</html>
