<?php

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);

var_dump($fruit); // string(6) "orange"

print_r($stack);

/*
output:

Array
(
    [0] => banana
    [1] => apple
    [2] => raspberry
)
*/
