<?php
$url = 'http://www.zomato.com/';

if (!$fp = fopen($url, 'r')) {
        trigger_error("Unable to open URL ($url)", E_USER_ERROR);
}

$meta = stream_get_meta_data($fp);

print_r($meta);

fclose($fp);

/*

Array
(
    [wrapper_data] => Array
        (
            [0] => HTTP/1.0 301 Moved Permanently
            [1] => Server: AkamaiGHost
            [2] => Content-Length: 0
            [3] => Location: https://www.zomato.com/
            [4] => Date: Sun, 21 Jun 2015 17:42:08 GMT
            [5] => Connection: close
            [6] => HTTP/1.0 200 OK
            [7] => Expires: Thu, 19 Nov 1981 08:52:00 GMT
            [8] => Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
            [9] => Pragma: no-cache
            [10] => Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval' *
            [11] => Content-Type: text/html; charset=UTF-8
            [12] => Server: Zomato
            [13] => Date: Sun, 21 Jun 2015 17:42:08 GMT
            [14] => Connection: close
            [15] => Set-Cookie: PHPSESSID=kafp4ilq62ru7t81p5n8ur1o43; path=/; domain=.zomato.com
            [16] => Set-Cookie: fbcity=89; expires=Fri, 18-Dec-2015 17:42:08 GMT; Max-Age=15552000; path=/; domain=.zomato.com
            [17] => Set-Cookie: route=_LI; expires=Sun, 21-Jun-2015 17:32:08 GMT; Max-Age=-600; path=/; domain=.zomato.com
            [18] => Set-Cookie: insider=1; expires=Tue, 23-Dec-2014 17:42:08 GMT; Max-Age=-15552000; path=/; domain=.zomato.com
            [19] => Set-Cookie: zl=en; expires=Fri, 18-Dec-2015 17:42:08 GMT; Max-Age=15552000; path=/; domain=.zomato.com
            [20] => Set-Cookie: fbtrack=8fb954faeefc1377a76977b12f96844d; expires=Wed, 15-Jun-2016 17:42:08 GMT; Max-Age=31104000; path=/; domain=.zomato.com
            [21] => Set-Cookie: adref=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=.zomato.com
            [22] => Set-Cookie: ueg=0; expires=Wed, 15-Jun-2016 17:42:08 GMT; Max-Age=31104000; path=/; domain=.zomato.com
        )

    [wrapper_type] => http
    [stream_type] => tcp_socket/ssl
    [mode] => r
    [unread_bytes] => 6996
    [seekable] => 
    [uri] => http://www.zomato.com/
    [timed_out] => 
    [blocked] => 1
    [eof] => 
)
*/
