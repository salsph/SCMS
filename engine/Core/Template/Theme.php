<?php

namespace Engine\Core\Template;

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
    public $url;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * Theme constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param null $name
     */
    public function header($name = null){
        $name = (string)$name;
        $file = 'header';

        if($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['header'], $name);
        }

        $this->LoadTemplateFile($file);
    }

    /**
     * @param null $name
     */
    public function footer($name = null){
        $name = (string)$name;
        $file = 'footer';

        if($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['footer'], $name);
        }

        $this->LoadTemplateFile($file);
    }

    /**
     * @param null $name
     */
    public function sidebar($name = null){
        $name = (string)$name;
        $file = 'sidebar';

        if($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        }

        $this->LoadTemplateFile($file);
    }

    /**
     * @param null $name
     * @param array $data
     */
    public function block($name = null, $data = []){
        $name = (string)$name;

        if($name !== ''){
            $this->LoadTemplateFile($name, $data);
        }
    }

    /**
     * @param $file_name
     * @param array $data
     * @throws \Exception
     */
    private function LoadTemplateFile($file_name, $data = []){
        $data+= $this->data;
        $file = ROOT_DIR . '/content/themes/default/' . $file_name . '.php';

        if (ENV == 'Admin'){
            $file = ROOT_DIR . '/View/' . $file_name . '.php';
        }

        if(is_file($file)){
            extract($data);
            require_once $file;
        }
        else{
            throw new \Exception(sprintf('Can\'t load template file "%s" in "%s" . Doesn\'t exist !', $file_name, $file));
        }
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


}