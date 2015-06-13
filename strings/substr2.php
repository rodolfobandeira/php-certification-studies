<?php

$email = 'foo@example.org';

$slice = substr($email, strpos($email, "@") + 1);

echo $slice .PHP_EOL;