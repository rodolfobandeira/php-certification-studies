<?php

// simple example function for chop()

// chop() is an alias of rtrim()

// without <pre> you cann't see desired output in your browser

echo '-->' .chop("   Ramki   "). '<--'. PHP_EOL; //right spaces are eliminated
echo '-->' .chop("Ramkrishna", "a..z"). '<--'. PHP_EOL; // Remove right lowercase chars form a to z.

/*
Output:

-->   Ramki<--
-->R<--

*/