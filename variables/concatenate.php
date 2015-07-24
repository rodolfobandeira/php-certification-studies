<?php

echo 'hello ' . 1 + 2 . '34';

echo PHP_EOL;

echo '3hello ' . 30 + 2;
// Quando uma string comeca com numero, ao fazer o cast
// o php pega somente o numero!
//
// Quando vc concatena uma string que comeca com numero
// e depois soma com algo, o cast atua primeiro no bloco concatenado
// tratando aquilo como string.
//
// Basically.. it's some of this: ("3hello30") + 2
// That will result on: 3 + 2 = 5

echo PHP_EOL;


/*
 * output: 234
 */
