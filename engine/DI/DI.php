<?php

/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 30.08.2017
 * Time: 19:51
 */

namespace Engine\DI;

/**
 * Class DI
 * @package Engine\Di
 */
class DI
{
    /**
     * @var array
     */
    private $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function __set($key, $value){
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return bool
     */
    public function __get($key){
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }



}