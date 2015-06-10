<?php

// reparte a frase por algum número caracteres de vírgula ou espaço,
// incluindo " ", \r, \t, \n e \f

$keywords = preg_split("/[\s,]+/", "hypertext language, programming");

print_r($keywords);


