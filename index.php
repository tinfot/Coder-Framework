<?php

defined('WEB_PATH') || define('WEB_PATH', dirname(__FILE__));
defined('COMMEN_PATH') || define('COMMEN_PATH', dirname(__FILE__) . '/commen');
defined('CONFIG_PATH') || define('CONFIG_PATH', dirname(__FILE__) . '/configs');

include_once COMMEN_PATH . '/Loader.php';
$config=CONFIG_PATH.'/config.php';
$config=require($config);

Loader::init(); //autoload Class
Session::start();


Coder::createApplication('Application',$config)->run();
