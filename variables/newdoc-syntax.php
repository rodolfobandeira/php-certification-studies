<?php

$test = 'opa, blz?'

$str = <<<"RODOLFO"
balblaba balb albalba
abasbasbasba aba asb
basbasbasba {$test}
dasdasda
RODOLFO;

echo $str;


/* 
 * Output:
balblaba balb albalba
abasbasbasba aba asb
basbasbasba opa, blz?
dasdasda
 */

