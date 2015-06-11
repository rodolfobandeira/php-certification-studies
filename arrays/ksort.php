<?php
// So.. ksort sort the array by the key values! It does the opposite of what asort does.

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

