<?php

namespace Engine\Core\Auth;

use \Engine\Helper\Cookie;

class Auth
{
    /**
     * @var string
     */
    private $hash_user;

    /**
     * @var bool
     */
    private $authorized = false;

    public function authorized(){
        return $this->authorized;
    }

    /**
     * @param $user
     */
    public function authorize($user){
        Cookie::set('auth_user', $user);
        Cookie::set('auth_authorized', true);
    }

    /**
     * @return null
     */
    public function hashUser(){
        return Cookie::get('auth_user');
    }


    public function unAuthorize(){
        Cookie::delete('auth_user');
        Cookie::delete('auth_authorized');
    }

    /**
     * @return string
     */
    public function salt(){
        return (string) rand(10000000, 99999999);
    }

    /**
     * @param $password
     * @param string $salt
     * @return string
     */
    public function encryptPassword($password, $salt = ''){
        return hash('sha256', $password . $salt);
    }

}