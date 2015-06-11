<?php

defined('WEB_PATH') || define('WEB_PATH', dirname(__FILE__));
defined('CORE_PATH') || define('CORE_PATH', dirname(__FILE__) . '/core');
defined('CONFIG_PATH') || define('CONFIG_PATH', dirname(__FILE__) . '/configs');

include_once CORE_PATH . '/Loader.php';
$config = CONFIG_PATH . '/config.php';
$config = require($config);

Loader::init(); //autoload Class
Session::start();

Coder::createApplication('Application', $config)->run();
