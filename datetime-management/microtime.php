<?php

echo microtime() .PHP_EOL; // Returns: 0.77671300 1434311794

$a = array_sum (explode (' ', microtime())); // Sum Integer + Float
echo $a .PHP_EOL;

for ($i = 0; $i < 10000; $i++); // Run 10000
$b = array_sum (explode (' ', microtime())); // Get the time again..
echo $b - $a .PHP_EOL; // Get the time to run that for and print it.
// 0.00250577926636

