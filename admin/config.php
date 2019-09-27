<?php

// HTTP
define('HTTP_SERVER', 'https://flexcart.herokuapp.com/admin/');
define('HTTP_CATALOG', 'https://flexcart.herokuapp.com/');

// HTTPS
define('HTTPS_SERVER', 'https://flexcart.herokuapp.com/admin/');
define('HTTPS_CATALOG', 'https://flexcart.herokuapp.com/');

// DIR
define('DIR_APPLICATION', '/app/admin/');
define('DIR_SYSTEM', '/app/system/');
define('DIR_LANGUAGE', '/app/admin/language/');
define('DIR_TEMPLATE', '/app/admin/view/template/');
define('DIR_CONFIG', '/app/system/config/');
define('DIR_IMAGE', '/app/image/');
define('DIR_CACHE', '/app/system/storage/cache/');
define('DIR_DOWNLOAD', '/app/system/storage/download/');
define('DIR_UPLOAD', '/app/system/storage/upload/');
define('DIR_LOGS', '/app/system/storage/logs/');
define('DIR_CATALOG', '/app/catalog/');
define('DIR_MODIFICATION', '/app/system/storage/modification/');
define('DIR_STORAGE', '/app/system/storage/');

// DB
$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]); 
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $db["host"]);
define('DB_USERNAME', $db["user"]);
define('DB_PASSWORD', $db["pass"]);
define('DB_DATABASE', trim($db["path"],"/"));
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

?>
