<?php


$str1="apple";
$str2="Apple";

echo 'Codigo ASCII de "a": ' .ord('a'). PHP_EOL; // Codigo ASCII de "a": 97
echo 'Codigo ASCII de "A": ' .ord('A'). PHP_EOL; // Codigo ASCII de "A": 65


echo (int)('a' < 'A'); // 97 > 65 --> true ou 1

// echo (int)(10 > 100);
die;


echo "(int)str1: ";
echo (int)$str1;
echo PHP_EOL;


echo "(int)str2: ";
echo (int)$str2;
echo PHP_EOL;





echo PHP_EOL;

// echo (int)($str1>$str2);