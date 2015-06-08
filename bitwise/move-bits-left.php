<?php

$a = 16;
$b = 4;
$c = $a << $b;

// echo 16 * pow(2,4);

echo $c; // 256

// 16 / 2 = 8 e sobra 0
// //  8 / 2 = 4 e sobra 0
// //  4 / 2 = 2 e sobra 0
// //  2 / 2 = 1 e sobra 0
//
// // 16 decimal = 0b10000;
//
// // Entao se eu mover os bits 4 vezes para a esqueda:
//
$binary = 0b100000000; 
//
echo PHP_EOL;
echo $binary; // 256
//
//
