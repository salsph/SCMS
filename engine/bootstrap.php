<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 31.08.2017
 * Time: 12:47
 */
require_once __DIR__ . '/../vendor/autoload.php';
use Engine\Cms;
use Engine\DI\DI;


try{

    $di = new DI();

    $cms = new Cms($di);
    $cms->run();

}catch (\ErrorException $e){
    echo $e->getMessage();
}