<?php
$time = microtime(1);
$mget = memory_get_usage();
$mgetpeak = memory_get_peak_usage();
require_once(__DIR__.'/../vendor/autoload.php');
$config = require_once(__DIR__.'/../config/main.php');
(new humanity\Site($config));

//echo round(microtime(1)-$time,2).' сек '.round(((memory_get_usage()-$mget)/1024/1024),2).' Mb '.round((memory_get_peak_usage()/1024/1024),2).' Mb';
?>
