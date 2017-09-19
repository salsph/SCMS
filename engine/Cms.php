<?php

/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 31.08.2017
 * Time: 12:46
 */

namespace Engine;


class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di){
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run(){
        print_r($this->di);
    }

}