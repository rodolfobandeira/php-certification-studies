<?php
$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok" .PHP_EOL;
    $tok = strtok(" \n\t");
}

/*
    *
        Word=This
            Word=is
                Word=an
            Word=example
        Word=string
    *
*/
