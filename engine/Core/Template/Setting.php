<?php

namespace engine\Core\Template;

use Engine\DI\DI;
use Admin\Model\Setting\SettingRepository;

class Setting
{
    /**
     * @var DI
     */
    protected static $di;

    /**
     * @var SettingRepository
     */
    protected static $repository;

    public function __construct(DI $di){
        self::$di = $di;
        self::$repository = new SettingRepository($di);
    }

    public static function get($setting_key){
        return self::$repository->getSetting($setting_key);
    }

}