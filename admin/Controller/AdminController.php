<?php

namespace Admin\Controller;

use \Engine\Controller;
use \Engine\Core\Auth\Auth;

class AdminController extends  Controller
{
    protected $auth;

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