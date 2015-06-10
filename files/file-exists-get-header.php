<?php

$file = 'http://php.net/images/logo.php';
$file_headers = @get_headers($file);
if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
        $exists = false;
}
else {
        $exists = true;
}
