<?php

namespace Engine\Core\Template;


class Component
{
    /**
     * @param $file_name
     * @param array $data
     * @throws \Exception
     */
    public static function load($file_name, $data = []){
        $file = ROOT_DIR . '/content/themes/default/' . $file_name . '.php';

        if (ENV == 'Admin'){
            $file = path('view') . '/' . $file_name . '.php';
        }

        if(is_file($file)){

            extract(array_merge($data, Theme::getData()));
            require $file;
        }
        else{
            throw new \Exception(sprintf('Can\'t load template file "%s" in "%s" . Doesn\'t exist !', $file_name, $file));
        }
    }

}