<?php

$array = array (0.1 => 'a', 0.2 => 'b');

// It casts to integer so.. 0.1 turns 0 and 0.2 turns 0 too.
// So.. the second element on the array overrides it.

echo count ($array); // 1
echo PHP_EOL;

print_r($array);
echo PHP_EOL;

/*
    Array
    (
        [0] => b
    )
*/
