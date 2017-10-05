<?php

namespace Engine\Helper;

class Common
{
    /**
     * @return bool
     */
    static function isPost(){
        return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
    }

    /**
     * @return mixed
     */
    static function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return string
     */
    static function getPathUrl(){
        $path = $_SERVER['REQUEST_URI'];

        if ($pos = strpos($path,'?')){
            $path = substr($path, 0, $pos);
        }

        return $path;
    }

}