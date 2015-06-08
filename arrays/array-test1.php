<?php

$array = '0123456789ABCDEFG';  // What? this is string!! careful!
$s = ''; // Empty string

for ($i = 1; $i < 50; $i++) {
    // This prints from 1 to 49, so 49 characters.
    echo $i. PHP_EOL;

    // concatenates on $s something...
    $s .= $array[rand(0,strlen ($array) - 1)];

    // strlen (size of string $array - 1)
}


echo $s. PHP_EOL;

echo strlen($s). PHP_EOL;

echo strlen('lua'). PHP_EOL; // 3 chars but the way array works is from ZERO, so if I cast it to array,
// it's going to be 0 to 2!! That's why on rand function it uses 'strlen() - 1'


