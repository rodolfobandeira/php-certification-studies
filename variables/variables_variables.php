<?php

$foo = '123';
$$foo = '345';

printf("%s %s %s %s", $foo, $$foo, ${'123'}, PHP_EOL);


