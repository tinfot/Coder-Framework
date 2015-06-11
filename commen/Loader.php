<?php

class Loader {

    public static $loader;

    public static function init() {
        if (self::$loader == NULL)
            self::$loader = new self();

        return self::$loader;
    }

    public function __construct() {
        spl_autoload_register(array($this, 'models'));
        spl_autoload_register(array($this, 'commen'));
        spl_autoload_register(array($this, 'controllers'));
        spl_autoload_register(array($this, 'library'));
    }

    public function controllers($class) {
        $class = preg_replace('/_controllers$/ui', '', $class);
        set_include_path(get_include_path() . PATH_SEPARATOR . 'controllers/');
        spl_autoload_extensions('.php');
        spl_autoload($class);
    }

    public function models($class) {
        $class = preg_replace('/_models$/ui', '', $class);
        set_include_path(get_include_path() . PATH_SEPARATOR . 'models/');
        spl_autoload_extensions('.php');
        spl_autoload($class);
    }

    public function commen($class) {
        $class = preg_replace('/_commen$/ui', '', $class);
        set_include_path(get_include_path() . PATH_SEPARATOR . 'commen/');
        spl_autoload_extensions('.php');
        spl_autoload($class);
    }
    
    public function library($class) {
        $class = preg_replace('/_library$/ui', '', $class);
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/base/');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/db/');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/db/ar/');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/db/schema/');
        set_include_path(get_include_path() . PATH_SEPARATOR . 'library/db/schema/mysql/');
        spl_autoload_extensions('.php');
        spl_autoload($class);
    }

}

?>