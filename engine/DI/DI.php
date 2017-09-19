<?php

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
    public function set($key, $value){
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return bool
     */
    public function get($key){
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }



}