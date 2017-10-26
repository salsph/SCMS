<?php

namespace Engine\Core\Config;

class Config
{

    /**
     * @param $key
     * @param string $item
     * @return bool
     */
    public static function item($key, $item = 'main'){
        $items = self::file($item);
        return isset($items[$key]) ? $items[$key] : false;
    }

    /**
     * @param $group
     * @return bool|mixed
     * @throws \Exception
     */
    public static function file($group){
        if (ENV == 'Cms'){
            $path = ROOT_DIR . '/' . strtolower(ENV) . '/Config/' . $group . '.php';
        }else{
            $path = ROOT_DIR . '/Config/' . $group . '.php';
        }


        if(is_file($path)){
            $config = require($path);

            if (is_array($config)){
                return $config;
            }else{
                throw new \Exception(sprintf('File %s isn\'t return valid array .', $path));
            }

        } else{
            throw new \Exception(sprintf('File %s not found . Doesn\'t exist .',$path));
        }

    }

}