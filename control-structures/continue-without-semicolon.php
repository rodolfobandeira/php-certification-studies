<?php

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue
    print "$i\n";
}

/*
 PHP Fatal error:  'continue' operator with non-constant operand is no longer supported in
 */

