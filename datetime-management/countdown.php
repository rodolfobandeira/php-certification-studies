<?php

$d1 = new DateTime("2014-01-01 00:00:01");
$d2 = new DateTime("2017-01-01 00:00:01");

$diff = $d2->diff($d1);
print_r($diff);

/*
(
    [y] => 1
    [m] => 0
    [d] => 0
    [h] => 0
    [i] => 0
    [s] => 0
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 1
    [days] => 10
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)
*/

echo PHP_EOL;

