<?php
// Sort the multidimensional array
usort($results, "custom_sort");
// Define the custom sort function
function custom_sort($a,$b) {
    return $a['some_sub_var']>$b['some_sub_var'];
}
