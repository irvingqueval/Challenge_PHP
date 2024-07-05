<?php
// First coded message
$codedMessage1 = "0@sn9sirppa@#?ia’jgtvryko1"; 
$messageLenght1 = strlen($codedMessage1); // calculates the size of the coded message
$keyNumber1 = $messageLenght1 / 2; // divides message size by 2

$startIndex = 5; // begins with the 6th character
$subString = substr($codedMessage1, $startIndex, $keyNumber1); // gives the message after the various parameters have been applied
$subString = str_replace('@#?', ' ', $subString); // replaces the following characters with a space in $subString

$decryptedMessage1 = strrev($subString); // deciphers the message by reversing the order of the characters 

// Seconde coded message
$codedMessage2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$messageLenght2 = strlen($codedMessage2);
$keyNumber2 = $messageLenght2 / 2;

$startIndex = 5;
$subString = substr($codedMessage2, $startIndex, $keyNumber2);

$subString = str_replace('@#?', ' ', $subString);

$decryptedMessage2 = strrev($subString);

// Third coded message
$codedMessage3 = 'aopi?sgnirts@#?sedhtg+p9l!';
$messageLenght3 = strlen($codedMessage3);
$keyNumber3 = $messageLenght3 / 2;

$startIndex = 5;
$subString = substr($codedMessage3, $startIndex, $keyNumber3);

$subString = str_replace('@#?', ' ', $subString);

$decryptedMessage3 = strrev($subString);


echo 'Message1: ' . $decryptedMessage1 . "<br>" . 'Message2: ' . $decryptedMessage2 . "<br>" . 'Message3: ' . $decryptedMessage3 . "<br>" ; // displays the 3 coded messages with a line break 
?>