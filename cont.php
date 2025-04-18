<?php
// Accepting input values
$fullName = "John Doe";
$email = "john.doe@example.com";
$address = "123 Main Street, Anytown, USA";

// Creating the formatted contact card using string concatenation
$contactCard = "Contact Card:\n";
$contactCard .= "-----------------\n";
$contactCard .= "Name: " . $fullName . "\n";
$contactCard .= "Email: \"$email\"\n";
$contactCard .= 'Address: \'' . $address . '\'\n';

// Display the contact card
echo nl2br($contactCard);
?>