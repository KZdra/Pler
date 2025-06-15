<?php

define('BASE_URL', 'http://localhost/Pler/');
define('APP_PATH', dirname(__FILE__));

define('DB_HOST', 'localhost');
define('DB_NAME', 'db-mvc');
define('DB_USER', 'root');
define('DB_PASS', '');

spl_autoload_register(function ($class) {
    $path = APP_PATH . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) require_once $path;
});
