<?php



function sort_my_array (&$array) {
    sort ($array);

    return $array;
    // Returns BOOL!!!!!!!!!!!
    // bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )
}

$a1 = array (3, 2, 1);

// var_dump (sort_my_array (&$a1));


var_dump (sort_my_array ($a1));
