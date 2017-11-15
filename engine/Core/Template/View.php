<?php

namespace Engine\Core\Template;

class View
{
    protected $theme;

    private $di;

    public function __construct(\Engine\DI\DI $di)
    {
        $this->theme = new Theme();
        $this->di = $di;
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

        $vars['lang'] = $this->di->get('language');
        //var_dump($vars);
        $this->theme->setData($vars);
        extract($vars);
        //print_r($lang);

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