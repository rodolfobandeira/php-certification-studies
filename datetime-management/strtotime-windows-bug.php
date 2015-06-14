<?php

echo strtotime ("November 11, 1952");

/*
 *  Prior to PHP 5.1.0, not all platforms support negative timestamps, 
 *  therefore your date range may be limited to no earlier than the Unix epoch. 
 *  This means that e.g. dates prior to Jan 1, 1970 will not work on Windows, 
 *  some Linux distributions, and a few other operating systems.
 *
 */

