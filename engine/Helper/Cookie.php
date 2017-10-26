<?php

namespace Engine\Helper;

class Cookie
{
    /**
     * @param $key
     * @param $value
     * @param int $time
     */
    public static function set($name, $value, $time = 31536000){
        setcookie($name, $value, time() + $time, '/');
    }

    /**
     * @param $name
     * @return null
     */
    public static function get($name){
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
    }

    /**
     * @param $name
     */
    public static function delete($name){
        if (isset($_COOKIE[$name])){
            self::set($name, '', -3600);
            unset($_COOKIE[$name]);
        }
    }

}