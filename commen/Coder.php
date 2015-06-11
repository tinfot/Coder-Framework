<?php
class Coder {
    
    public static function createApplication($class,$config=null) {
        return new $class($config);
    }

}
?>