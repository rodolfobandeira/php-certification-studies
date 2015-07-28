<?php
function xrange($start, $limit, $step = 1) {
    for ($i = $start; $i <= $limit; $i += $step) {
        yield $i;
    }
}

echo 'Single digit odd numbers: ';

/*
 * Note that an array is never created or returned,
 * which saves memory.
 */
foreach (xrange(1, 9, 2) as $number) {
    echo "$number ";
}

echo "\n";

// Output:
// Single digit odd numbers: 1 3 5 7 9 
