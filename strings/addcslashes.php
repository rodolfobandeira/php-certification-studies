<?php

echo addcslashes('foo[ ]', 'A..z');
// output:  \f\o\o\[ \]
echo "\n";



// O caracteer com maior codigo ASCII deve estar no final. Se for passado um maior no comeco.. temos o seguinte output:
echo addcslashes("zoo['.']", 'z..A');
// output:  \zoo['\.']
echo "\n";