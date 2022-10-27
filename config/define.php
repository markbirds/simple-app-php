<?php

define('APP_NAME', 'simple-app-php');

// Urls
define('ROOT_URL', 'http://localhost/' . APP_NAME);
define('PAGES_URL', ROOT_URL . '/pages');
define('STATIC_URL', ROOT_URL . '/static');

// File paths
define('DB_PATH', "{$_SERVER['DOCUMENT_ROOT']}/" . APP_NAME . '/db');
define('UTILS_PATH', "{$_SERVER['DOCUMENT_ROOT']}/" . APP_NAME . '/utils');
define('TEMPLATES_PATH', "{$_SERVER['DOCUMENT_ROOT']}/" . APP_NAME . '/templates');

// Database configuration
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','SIMPLE_APP_PHP');
define('DB_PASS','password123');

?>
