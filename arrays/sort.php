<?php
// Let' see wtf is going to happen while using sort comparing with asort and ksort.

// Ok.. looks like sort it's the same shit of ksort.. let's ask on ##php freenode..
// looks like sort is only for


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
 output:

a = orange
b = banana
c = apple
d = lemon

 */

