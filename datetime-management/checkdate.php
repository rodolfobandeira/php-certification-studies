<?php

for ($i = 0; $i < 100; $i++) {
    $day = rand (1, 31);
    $month = rand (1, 12);
    $year = rand (1000, 2500);

    if (checkdate ($month, $day, $year)) {
        echo "$month/$day/$year is a valid date\n";
    } else {
        echo "$month/$day/$year is not a valid date\n";
    }
}