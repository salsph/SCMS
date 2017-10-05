<?php

namespace Engine\Core\Router;


class UrlDispatcher
{
    /**
     * @var array
     */
    private $method = ['GET', 'POST'];

    /**
     * @var array
     */
    private $routes = [
        'GET'  => '',
        'POST' => ''
    ];

    /**
     * @var array
     */
    private $patterns = [
        'num' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $pattern){
        $this->patterns[$key] = $pattern;
    }


    /**
     * @param $method
     * @param $uri
     * @return DispatchedRoute
     */
    public function dispatch($method, $uri){
        $routes = $this->routes(strtoupper($method));

        if (array_key_exists($uri,$routes)){
            return new DispatchedRoute($routes[$uri]);
        }

        return $this->doDispatch($method, $uri);
    }

    /**
     * @param $method
     * @return array|mixed
     */
    public function routes($method){
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }


    /**
     * @param $method
     * @param $uri
     * @return DispatchedRoute
     */
    public function doDispatch($method, $uri){
        foreach($this->routes($method) as $route => $controller){
            $pattern = '#^' . $route . '$#s';

            if (preg_match($pattern, $uri, $parameters)){
                return new DispatchedRoute($controller, $this->processParam($parameters));
            }
        }
    }

    /**
     * @param $method
     * @param $pattern
     * @param $controller
     */
    public function register($method, $pattern, $controller){
        $convert = $this->convertPattern($pattern);
        //print_r($convert);
        $this->routes[strtoupper($method)][$convert] = $controller;
        //print_r($this->routes);
    }

    /**
     * @param $pattern
     * @return mixed
     */
    private function  convertPattern($pattern){
        if (strpos($pattern, '(') === false){
            return $pattern;
        }

        return preg_replace_callback('#\((\w+):(\w+)\)#',
            function($matches){
                return '(?<' .  $matches[1] . '>' . strtr($matches[2], $this->patterns) . ')';
        }, $pattern);
    }

    /**
     * @param $matches
     * @return string
     */
    private function replacePattern($matches){
        return '(?<' .  $matches[1] . '>' . strtr($matches[2], $this->patterns) . ')';

    }

    /**
     * @param $parametrs
     * @return mixed
     */
    private function processParam($parametrs){
        foreach($parametrs as $k => $v){
            if (is_int($k)){
                unset($parametrs[$k]);
            }
        }
        return $parametrs;
    }
}