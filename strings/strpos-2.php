<?php
/*
Category: Strings and Patterns.

The strpos() function is used to determine the position in a string of the given search string. If the search string cannot be found, false is returned.

What is the output of the following script?



What we learned here is... $pos has the position 0 (zero). So the validation if 
(!$pos) is considering 0 equals to false.
 */


    $haystack = 'abcda';
    $needle   = 'a';

    $pos = strpos($haystack, $needle);

    if (!$pos) {
        echo "miss";
    } else {
        echo "hit " . $pos;
    }

