<?php
/**
 * 网站的SESSION设置和获取
 * @property boolen $_status SESSION开启状态
 */
class Session {
    
    private static $_SESSION_STATUS = false;
    
    /**
     * 开启SESSION
     * @return boolen
     */
    public static function start(){
        return self::$_SESSION_STATUS = session_start();
    }

    /**
     * 设置SESSION
     * @param mix $key
     * @param mix $value
     */
    public static function _set($key='',$value=''){
        if(self::$_SESSION_STATUS){
            return $_SESSION[$key] = $value;
        }
    }
    
    /**
     * 获取SESSION
     * @param mix $key
     */
    public static function _get($key=''){
        if(self::$_SESSION_STATUS){
            return isset($_SESSION[$key])?$_SESSION[$key]:array();
        }
    }
    
    /**
     * 卸载SESSION
     * @param mix $key
     */
    public static function _unset($key=''){
        if(self::$_SESSION_STATUS){
            unset($_SESSION[$key]);
        }
    }
}
