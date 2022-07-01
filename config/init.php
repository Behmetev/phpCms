<?php

define("DEBUG" , 1);
define("ROOT"  , dirname(__DIR__));
define("WWW"   , ROOT . '/public');
define("APP"   , ROOT . '/app');
define("CORE"  , ROOT . '/vendor/phpCms/core');
define("LIBS"  , ROOT . '/vendor/phpCms/core/libs');
define("CACHE" , ROOT . '/tmp/cache');
define("CONF"  , ROOT . '/config');
define("LAYOUT", 'lw');

$appPath = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$appPath = preg_replace("#[^/]+$#", '', $appPath);
$appPath = str_replace("/public/", '' , $appPath);

define("PATH", $appPath);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';