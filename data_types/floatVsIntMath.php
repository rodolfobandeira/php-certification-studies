<?php

    $operation = ((0.1 + 0.7) * 10);

    printf('Without (int): %s %sWith (int): %s%s', $operation, PHP_EOL, (int) $operation, PHP_EOL);

/*
    You would expect that the expression ((0.1 + 0.7) * 10) would evaluate to 8 (and,
    in fact, if you print it out without the integer conversion, it does). However, the statement
    above outputs 7 instead. This happens because the result of this simple arithmetic
    expression is stored internally as 7.999999 instead of 8; when the value is converted
    to int, PHP simply truncates away the fractional part, resulting in a rather
    significant error (12.5%, to be exact).
    The lesson that you need to take home from all this is simple: know the limitations
    of your numeric data types, and plan around them. Whenever the precision of your
    calculation is a relevant factor to the proper functioning of your application, you
    should consider using a the arbitrary precision functions provided by the BCMath
    extension (you can search for it in your copy of the PHP manual) instead of PHP’s
    built-in data types.
*/

