<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Functions.php';

use Engine\Cms;
use Engine\DI\DI;

class_alias('Engine\\Core\\Template\\Assets', 'Assets');
class_alias('Engine\\Core\\Template\\Theme', 'Theme');
class_alias('Engine\\Core\\Template\\Setting', 'Setting');
class_alias('Engine\\Core\\Template\\Menu', 'Menu');

try{
    $di = new DI();

    $services = require_once __DIR__.'/Config/Service.php';

    foreach($services as $service){
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();

}catch (\ErrorException $e){
    echo $e->getMessage();
}