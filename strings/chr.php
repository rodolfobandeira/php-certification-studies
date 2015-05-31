<?php

$str = "The string ends in escape: ";
$str .= chr(65); /* add "A" character at the end of $str */

// Decimal: 65
// Hexadecimal: 41

echo $str. PHP_EOL;


/* Often this is more useful */

$str = sprintf("The string ends in escape: %c", 65);
echo $str. PHP_EOL;