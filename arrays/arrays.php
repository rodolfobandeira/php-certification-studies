<?php
$arr = array("A", "B", "C");
$first = array_shift($arr);
$last = array_pop($arr);

echo $first + $last;



$arr = array("A", "B", "C");
$first = array_shift($arr);
$last = array_pop($arr);

echo $first; // A
echo $last; // C

echo (int) $first; // 0
echo (int) $last;  // 0

echo $first + $last // 0 + 0 = 0

// Conclusions:

// Return of array_shift and array_pop are the elements extracted.
// When we sum two strings, it doesn't merge. It converts to (int).
// When we cast a string to (int) it becomes 0 (Zero).
// So, using the operator + with strings returns 0

// obs: In javascript, the concatenation operator is + and in php is .
