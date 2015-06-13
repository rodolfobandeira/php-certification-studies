<?php
// $s = file_get_contents ("http://www.php.net");
// strip_tags ($s, array ('p'));
// echo count ($s);

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';

echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>') .PHP_EOL;
