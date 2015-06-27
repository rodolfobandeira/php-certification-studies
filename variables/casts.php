<?php
$var1 = "231 test string";
$var2 = 1 + $var1;
$var2 = (int)$var2;
$var3 = (float)$var1;
$var1 = ((bool)$var1) == true;
echo "$var1 $var2 $var3" . PHP_EOL;

// Printing a boolean, php will convert automatically to 1
// converting string with first chars as a number, you'll get a integer.
// even convering it to float
