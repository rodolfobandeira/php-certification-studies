<?php

$some_string = "Rodolfo Bandeira";
var_dump(convert_uuencode($some_string));

// string(28) "04F]D;VQF;R!"86YD96ER80``
// `
// "


echo convert_uudecode("04F]D;VQF;R!\"86YD96ER80```");