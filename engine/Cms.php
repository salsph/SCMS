<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
use Engine\Helper\Common;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * @var Router
     */
    private $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run Cms
     */
    public function run()
    {

        try {

            /*
             * Routes adding .
             */
            $routes = require_once __DIR__ . '/../'. strtolower(ENV) .'/' . 'Routes.php';
            foreach ($routes as $route){
                list($name, $pattern, $controller_name) = $route;
                $this->router->add($name, $pattern, $controller_name);
            }


            $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

            if ($routerDispatch == null) {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }

            list($class, $action) = explode(':', $routerDispatch->getController(), 2);
            $controller = '\\'. ENV .'\\Controller\\' . $class;

            //echo $class . '</br>';
            //echo $action . '</br>';


            call_user_func_array([new $controller($this->di), $action], $routerDispatch->getParametrs());

        } catch (\ErrorException $e) {
            echo $e->getMessage();
            exit;
        }
    }

}