<?php
$var1 = "Hello";
$var2 = "hello";



if (strcmp($var1, $var2) !== 0) {
        echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}

/*
 * output:
 *
 * $var1 is not equal to $var2 in a case sensitive string comparison
 */

