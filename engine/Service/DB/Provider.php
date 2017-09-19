<?php

namespace Engine\Service\DB;

use Engine\Service\AbstractProvider;
use Engine\Core\DB\Connection;

class Provider extends AbstractProvider
{
    /*
     * @var string
     */
    public $service_name = 'db';

    /**
     * @return mixed
     */
    public function init()
    {
        $db = new Connection();
        $this->di->set($this->service_name, $db);
    }
}