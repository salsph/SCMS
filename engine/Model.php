<?php

namespace Engine;

use \Engine\Core\DB\QueryBuilder;

abstract class Model
{
    protected $di;

    protected $db;

    protected $config;

    protected $query_builder;

    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
        $this->db = $this->di->get('db');
        $this->config = $this->di->get('config');
        $this->query_builder = new QueryBuilder();

    }

}