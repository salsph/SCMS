<?php

namespace Engine\Core\Request;

class Request
{
    /**
     * @var array
     */
    public $cookie = [];
    /**
     * @var array
     */
    public $request = [];
    /**
     * @var array
     */
    public $get = [];
    /**
     * @var array
     */
    public $post = [];
    /**
     * @var array
     */
    public $files = [];
    /**
     * @var array
     */
    public $server = [];

    /**
     * Request constructor.
     */
    public function __construct(){
        $this->cookie = $_COOKIE;
        $this->server = $_SERVER;
        $this->request = $_REQUEST;
        $this->get = $_GET;
        $this->post = $_POST;
        $this->files = $_FILES;
    }

}