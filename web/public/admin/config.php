<?php
// HTTP
define('HTTP_SERVER', 'http://'.$_SERVER["HTTP_HOST"].'/admin/');
define('HTTP_CATALOG', 'http://'.$_SERVER["HTTP_HOST"].'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$_SERVER["HTTP_HOST"].'/admin/');
define('HTTPS_CATALOG', 'http://'.$_SERVER["HTTP_HOST"].'/');

// DIR
define('DIR_APPLICATION', '/var/www/html/public/admin/');
define('DIR_SYSTEM', '/var/www/html/public/system/');
define('DIR_LANGUAGE', '/var/www/html/public/admin/language/');
define('DIR_TEMPLATE', '/var/www/html/public/admin/view/template/');
define('DIR_CONFIG', '/var/www/html/public/system/config/');
define('DIR_IMAGE', '/var/www/html/public/image/');
define('DIR_CACHE', '/var/www/html/public/system/cache/');
define('DIR_DOWNLOAD', '/var/www/html/public/system/download/');
define('DIR_UPLOAD', '/var/www/html/public/system/upload/');
define('DIR_LOGS', '/var/www/html/public/system/logs/');
define('DIR_MODIFICATION', '/var/www/html/public/system/modification/');
define('DIR_CATALOG', '/var/www/html/public/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'passroot');
define('DB_DATABASE', 'dbname');
define('DB_PREFIX', 'oc_');
