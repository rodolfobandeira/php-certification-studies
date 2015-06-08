<?php

function myfunction($a, $b = true)
{
    if($a && !$b) {
        echo "Hello, World!\n";
    }
}

$s = array(0 => "my",
    1 => "call",
    2 => '$function',
    3 => ' ',
    4 => "function",
    5 => '$a',
    6 => '$b',
    7 => 'a',
    8 => 'b',
    9 => '');
$a = true;
$b = false;

/* Group A */
// $name = $s[?].$s[?].$s[?].$s[?].$s[?].$s[?];

/* Group B */
// $name(, ${$s[?]});

echo ${$s[7]};

echo ${
    $s[8]
};

