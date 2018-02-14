<?php

namespace Engine\Core\Template;

use Engine\Core\Config\Config;

class Theme
{
    /**
     * @var array
     * const for file names
     */
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'siderbar' => 'sidebar-%s',
        ];
    /**
     * @var string
     */
    protected static $url = '';

    /**
     * const for current theme url
     */
    const URL_THEME_MASK = 'content/themes/%s';

    /**
     * @var array
     */
    protected static $data = [];

    /**
     * Theme constructor.
     */
    public function __construct()
    {
    }

    public static function getUrl(){
        $curr_theme = Config::item('default_theme', 'main');

        return sprintf(self::URL_THEME_MASK, $curr_theme);
    }

    /**
     * @param null $name
     */
    public static function header($name = null){
        $name = (string)$name;
        $file = self::DetectFileName($name, __FUNCTION__);

        Component::load($file);
    }

    /**
     * @param null $name
     */
    public static function footer($name = null){
        $name = (string)$name;
        $file = self::DetectFileName($name, __FUNCTION__);

        Component::load($file);
    }

    /**
     * @param null $name
     */
    public static function sidebar($name = null){
        $name = (string)$name;
        $file = self::DetectFileName($name, __FUNCTION__);

        Component::load($file);
    }

    /**
     * @param null $name
     * @param array $data
     */
    public static function block($name = null, $data = []){
        $name = (string)$name;

        if($name !== ''){
            Component::load($name, $data);
        }
    }


    /**
     * @param $file
     * @param $function
     * @return string
     */
    public static function DetectFileName($file, $function){
        return empty($file) ? $function : sprintf(self::RULES_NAME_FILE, $file);
    }



    /**
     * @return array
     */
    public static function getData()
    {
        return self::$data;
    }

    /**
     * @param array $data
     */
    public static function setData($data)
    {
        self::$data = $data;
    }


}