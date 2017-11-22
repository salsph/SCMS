<?php

namespace Engine\Core\Template;


class Assets
{
    const JS_EXT = '.js';
    const CSS_EXT = '.css';
    const JS_SCRIPT_PATTERN = '<script type="text/javascript" src="%s"></script>';
    const CSS_LINK_PATTERN = '<link rel="stylesheet" href="%s">';

    private static $container = [];

    public static function css($link){
        $file = Theme::getUrl() . '/' . $link ;

        if (is_file($file)){
            self::$container['css'][] = $file;
        }
    }

    public static function renderCss($list){
        foreach ($list as $file){
            echo sprintf(self::CSS_LINK_PATTERN, $file) . PHP_EOL;
        }
    }

    public static function js($link){
        $file = Theme::getUrl() . '/' . $link ;

        if (is_file($file)){
            self::$container['js'][] = $file;
        }
    }

    public static function renderJs($list){
        foreach ($list as $file){
            echo sprintf(self::JS_SCRIPT_PATTERN, $file) . PHP_EOL;
            //var_dump($l);
        }
    }

    public static function render($extension){
        $list = isset(self::$container[$extension]) ? self::$container[$extension] : false;

        if ($list){
            $render_method = 'render' . ucfirst($extension);
            self::$render_method($list);
        }
    }

}