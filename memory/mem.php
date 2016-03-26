<?php

$a = [];
for($i=0; $i < 100000;$i++) {
    $a[] = ['abc','def','ghi','jkl','mno','pqr'];
}

$mem_usage = memory_get_usage(true);

echo round($mem_usage/1048576,2)." megabytes\n";
/*
 * PHP 5.6
 * 108.5 Mb
 */


/* 
 * PHP 7.0.4
 * 42 Mb
 */

/*
 * PHP 7.0.4 with Opcache
 * 6 Mb
 */


