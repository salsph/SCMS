<?php

namespace Admin\Controller;

use \Engine\Controller;
use \Engine\Core\Auth\Auth;

class AdminController extends  Controller
{
    protected $auth;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * AdminController constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);

        $this->auth = new Auth();
        if ($this->auth->hashUser() == null){
            header('Location: /admin/login');
            exit;
        }

        //load language
        $this->load->language('dashboard/menu');
    }

    /**
     * Auth checkout
     */
    private function checkout(){

    }

    /**
     * Logout current admin
     */
    public function logout(){
        $this->auth->unAuthorize();
        header('Location: /admin/login');
        exit;
    }


}