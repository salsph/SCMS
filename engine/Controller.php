<?php


namespace Engine;


use Engine\Core\Request\Request;
use Engine\DI\DI;

abstract class Controller
{
    /**
     * @var DI
     */
    protected $di;

    /*
     * @var Connection
     */
    protected $db;

    /*
     * @var View
     */
    protected $view;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Load
     * Model loader
     */
    protected $load;

    /**
     * Controller constructor.
     * @param DI $di
     */
    public function __construct(DI $di){
        $this->di = $di;
        $this->db = $this->di->get('db');
        $this->view = $this->di->get('view');
        $this->config = $this->di->get('config');
        $this->request = $this->di->get('request');
        $this->load = $this->di->get('load');
    }

}