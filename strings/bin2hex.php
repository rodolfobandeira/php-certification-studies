<?php

// WTF IS HEXADECIMAL REPRESENTATION IF IT DOESN'T CONVERT TO REAL HEX?
// Fuck?!

// Converts binary to ( --> hexadecimal representation  <-- )

echo bin2hex(11111111). PHP_EOL;
// 3131313131313131

/*
  This function is for converting binary data into a hexadecimal string representation.
  This function is not for converting strings representing binary digits into hexadecimal.
  If you want that functionality, you can simply do this:
*/

$binary = "11111111";
$hex = dechex(bindec($binary));
echo $hex. PHP_EOL;


// Another example from php.net:
// -------------------------------------------------------------------------------------------

// I thought it'll give me an "F" if i give it a "1111"...
// Here's something to convert a binary-string into a hex-string and other direction too:

function hexbin($hex) {
    $bin = decbin(hexdec($hex));
    return $bin;
}

function binhex($bin) {
    $hex = dechex(bindec($bin));
    return $hex;
}

echo hexbin('F'). PHP_EOL;
// 1111


echo binhex('1111'). PHP_EOL;
// f


