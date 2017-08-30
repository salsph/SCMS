<?php

/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 30.08.2017
 * Time: 19:51
 */

namespace Engine\Di;

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
        $this->container['$key'] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return bool
     */
    public function __get($key){
        return $this->container['$key'] ? isset($this->container['$key']) : false;
    }

    public function go(){}



}