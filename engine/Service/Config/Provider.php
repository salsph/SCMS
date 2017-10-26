<?php

namespace Engine\Service\Config;

use Engine\Service\AbstractProvider;
use Engine\Core\Config\Config;

class Provider extends AbstractProvider
{
    /*
     * @var string
     */
    public $service_name = 'config';

    /**
     * @return mixed
     */
    public function init()
    {
        $config['main'] = Config::file('main');
        $config['db'] = Config::file('db');
        $this->di->set($this->service_name, $config);
    }
}