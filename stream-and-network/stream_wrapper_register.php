<?php

$existed = in_array("var", stream_get_wrappers());
if ($existed) {
        stream_wrapper_unregister("var");
}
stream_wrapper_register("var", "VariableStream");
$myvar = "";

$fp = fopen("var://myvar", "r+");

fwrite($fp, "line1\n");
fwrite($fp, "line2\n");
fwrite($fp, "line3\n");

rewind($fp);
while (!feof($fp)) {
        echo fgets($fp);
}
fclose($fp);
var_dump($myvar);

if ($existed) {
        stream_wrapper_restore("var");
}

