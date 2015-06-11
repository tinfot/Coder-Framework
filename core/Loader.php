<?php

class Loader {

    public static $loader;

    public static function init() {
        if (self::$loader == NULL)
            self::$loader = new self();

        return self::$loader;
    }

    public function __construct() {
        spl_autoload_register(array($this, 'core'));
        spl_autoload_register(array($this, 'models'));
        spl_autoload_register(array($this, 'commen'));
        spl_autoload_register(array($this, 'controllers'));
    }
    
    public function core($class) {
        $class = preg_replace('/_core$/ui', '', $class);
        set_include_path(get_include_path() . PATH_SEPARATOR . 'core/');
        spl_autoload_extensions('.php');
        spl_autoload($class);
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

}

?>