<?php

namespace engine\Core\Template;

use Cms\Model\Menu\MenuRepository;

class Menu
{
    /**
     * @var DI
     */
    public static $di;

    /**
     * @var MenuRepository
     */
    public static $repository;

    public function __construct($di){
        self::$di = $di;
        self::$repository = new MenuRepository($di);
    }

    public function show(){

    }

    public static function mainMenu(){
        //return self::$repository->getAll();
        return self::$repository->get('Main');
    }

}