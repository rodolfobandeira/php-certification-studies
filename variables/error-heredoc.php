<?php
    $name = 'John';

    $str = <<<EOF
Hello $name
    EOF;
// Error because EOF should be on the first char of the line.
// To fix just remove the white space on the left of EOF;


    echo trim($str);

