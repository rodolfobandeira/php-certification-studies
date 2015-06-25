<?php
function incrementVariable() {
       static $nb = 0;
          $nb++;
          return $nb;
}
echo incrementVariable();
incrementVariable();

echo PHP_EOL;

