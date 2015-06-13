<?php

$a = 'able osts indy';
echo wordwrap ($a, 1, "c", false);

// This will output something like this:
//  string wordwrap ( string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = false ]]] )