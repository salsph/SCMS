<?php

namespace Engine\Core\Template;

use \Engine\Core\Config\Config;

class View
{
    /**
     * @var Theme
     */
    protected $theme;

    /**
     * @var \Engine\DI\DI
     */
    private $di;

    /**
     * @var Setting
     */
    private $setting;

    /**
     * @var Menu
     */
    private $menu;

    public function __construct(\Engine\DI\DI $di)
    {
        $this->theme = new Theme();
        $this->di = $di;
        $this->setting = new Setting($di);
        $this->menu = new Menu($di);
    }

    /**
     * @param $template
     * @param array $vars
     * @throws \Exception
     */
    public function render($template, $vars = []){
        if(file_exists($this->getThemePath() . '/functions.php')){
            require_once $this->getThemePath() . '/functions.php';
        }

        $template_path = $this->getTemplatePath($template, ENV);

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
    private function getTemplatePath($template, $env = null){
        if ($env == 'Cms'){
            $curr_theme = Config::item('default_theme', 'main');
            return ROOT_DIR . '/content/themes/'. $curr_theme .'/' . $template . '.php';
        }


        return path('view') . '/' . $template . '.php';
    }

    private function getThemePath(){
        $curr_theme = Config::item('default_theme', 'main');
        return ROOT_DIR . '/content/themes/' . $curr_theme;
    }

    public function getTheme(){
        return $this->theme;
    }

}