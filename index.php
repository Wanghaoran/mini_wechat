<?php
$url="http://mini50.sinaapp.com/";
header("HTTP/1.1 301 Moved Permanently");
header ("Location:$url");

define('APP_DEBUG', true);
define('APP_NAME', 'index');
define('APP_PATH', './index/');
require './app/ThinkPHP.php';