<?php

echo strlen("Jesus é o Rei das nações"). PHP_EOL;
echo strlen(utf8_encode("Jesus é o Rei das nações")). PHP_EOL;


echo strlen("ç"). PHP_EOL;
echo strlen(utf8_encode("ç")). PHP_EOL;
echo utf8_encode("ç"). PHP_EOL;

echo strlen("A"). PHP_EOL;

// 27
// 33

