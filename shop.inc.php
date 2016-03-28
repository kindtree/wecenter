<?php
header('Content-Type:text/html;Charset=utf-8');
date_default_timezone_set('PRC');
define('ROOT_PATH', dirname(__FILE__));
define('DB_HOST', '192.168.100.17');
define('DB_USER', 'root');
define('DB_PASS', 'cecb2b');
define('DB_NAME', 'zfadb');
define('DB_PORT', '33066');
function __autoload($class_name) {
    require ROOT_PATH . '/includes/' . ucfirst($class_name) . '.class.php';
}
?>