<?php

$foo = preg_replace("/img=(\S+)/",'<img src="\1">', $text);

print_r($text);

