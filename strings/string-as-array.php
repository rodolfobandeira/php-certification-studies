<?php
$alpha = 'abcdefghijklmnopqrstuvwxyz';
$letters = array(15, 7, 15);

foreach($letters as $val) {
    echo $alpha{$val};
}

echo PHP_EOL;