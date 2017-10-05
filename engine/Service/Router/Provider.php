<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    private $service_name = 'router';

    /**
     * @param $host
     */
    public function init(){
         $router = new Router('http://scms/');
         $this->di->set($this->service_name, $router);
     }


}