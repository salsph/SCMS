<?php

namespace Engine\Core\Router;


class DispatchedRoute
{
    /**
     * @var
     */
    private $controller;

    /**
     * @var
     */
    private $parametrs;

    /**
     * DispatchedRoute constructor.
     * @param $controller
     * @param array $parametrs
     */
    public function __construct($controller, $parametrs = [])
    {
        $this->controller = $controller;
        $this->parametrs = $parametrs;
    }

    /**
     * @return mixed
     */
    public function getParametrs()
    {
        return $this->parametrs;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }


}