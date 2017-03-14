<?php
require "functions.php";
//tagasi koju
home();
var_dump($_SERVER);
//küsin serverilt, kes sa oled...
echo realpath(dirname(__FILE__));//saame reaalse teekonna juurkataloogist
phpinfo();
?>
