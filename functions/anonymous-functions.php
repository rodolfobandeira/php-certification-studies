<?php

$f = function($x) {
    return function($y) use ($x) {
        return str_repeat($x, $y);
    };
};

$a = $f(2);
$b = $f(3);
$c = $a(2) . $b(3);
echo ($c). PHP_EOL;

// What's the output?
// 22333
