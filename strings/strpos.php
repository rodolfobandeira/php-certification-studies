<?php
$email  = 'name@example.com';
$domain = strpos($email, '@');
echo $domain; // prints 4

// this function returns the position of the first char that it found the needle.
