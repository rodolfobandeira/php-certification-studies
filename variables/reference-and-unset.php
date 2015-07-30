<?php

$origin = "Hello World";
$reference = &$origin;

$origin = 'Rodolfo Bandeira';
unset($origin);
echo $reference;

// Believe the output is: Rodolfo Bandeira
// http://php.net/manual/en/language.references.unset.php

