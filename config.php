<?php
/*
 * USBlamp - state tracker config
 *
 * see: https://github.com/misel228/usblamp-state-tracker
 */

//colors the USB lamp can show - each color can be on or off
$colors = array(
    'red'
    ,'green'
    ,'blue'
    ,'magenta'
    ,'cyan'
    ,'yellow'
    ,'orange'
);
//timestamp for each slot after which the message will be ignored
//stored in the first 10 digits of a message
define('TIME_STAMP_SIZE',10);
define('MAX_TIME', 86400); # one day
//string size for status storage
define('STORAGE_SIZE',count($colors) * (1 + TIME_STAMP_SIZE));
//key for the shared memory
define("SHM_IDENTIFIER", 0x2345);
