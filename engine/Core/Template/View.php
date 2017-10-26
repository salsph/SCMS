<?php

namespace Engine\Core\Template;

class View
{
    protected $theme;

    public function __construct()
    {
        $this->theme = new Theme();
    }

    /**
     * @param $template
     * @param array $vars
     * @throws \Exception
     */
    public function render($template, $vars = []){
        $template_path = $this->getTamplatePath($template, ENV);

        if (!is_file($template_path)){
            throw new \InvalidArgumentException(sprintf("template '%s' not found in '%s'", $template, $template_path));
        }

        $this->theme->setData($vars);
        extract($vars);

        ob_start();
        ob_implicit_flush(0);

        try{
            require_once $template_path;
        }catch (\Exception $e){
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();

    }

    /**
     * @param $template
     * @param null $env
     * @return string
     */
    private function getTamplatePath($template, $env = null){
        if ($env == 'Cms')
            return ROOT_DIR . '/content/themes/default/' . $template . '.php';

        return ROOT_DIR . '/View/' . $template . '.php';
    }

}