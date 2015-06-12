<?php
function sort_my_array ($array)
{
    return sort ($array);
}
$a1 = array (3, 2, 1);
var_dump (sort_my_array (&$a1));

