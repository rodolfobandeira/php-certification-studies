<?php
$input = "Alien";
echo str_pad($input, 10) .PHP_EOL;                      // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT) .PHP_EOL;  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH) .PHP_EOL;   // produces "__Alien___"
echo str_pad($input, 6 , "___") .PHP_EOL;               // produces "Alien_"


