<?php

// So.. basically this function will return an integer from a string passed as parameter.
// Can be useful validating the integrity of data transmitted through network.

// Sometimes the integer can be so big that reach the Signal register generating a number negative on 32 bits systems

// Similar with md5sum();

echo crc32('Rodolfo Bandeira'). PHP_EOL;

// Output: 1247088539

// Warning:
// Because PHP's integer type is signed many crc32 checksums will result in negative integers on 32bit platforms.
// On 64bit installations all crc32() results will be positive integers though.

