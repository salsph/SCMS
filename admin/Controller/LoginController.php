<?php

namespace Admin\Controller;

use \Engine\Controller;
use \Engine\Core\Auth\Auth;
use \Admin\Model\User\UserRepository;

use \Engine\Core\DB\QueryBuilder;

class LoginController extends  Controller
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
        if ($this->auth->hashUser() !== null){
            header('Location: /admin');
            exit;
        }

    }

    /**
     *
     */
    public function formLogin(){
        $this->view->render("login");
    }

    public function auth(){
        $login = $this->request->post['login'];
        $password = md5($this->request->post['password']);

        $QueryBuilder = new QueryBuilder();
        //$sql = $QueryBuilder->select()->from('user')->where('login', $login)->where('password', $password)->where('role', 'admin')->sql();
        $user_repository = new UserRepository($this->di);
        $result = $user_repository->getUser($login, $password);


        //$result = $this->db->query($sql, $QueryBuilder->getValues());

        if (!empty($result)){
            $user = $result[0];
            $hash_user = md5($user['id'] . $user['login'] . $user['password'] . $this->auth->salt());

            $sql = $QueryBuilder->update('user')->set(['hash' => $hash_user])->where('id', $user['id'])->sql();
            $this->db->execute($sql, $QueryBuilder->getValues());
            $this->auth->authorize($hash_user);

            header('Location: /admin/login');
            exit;
        }

        echo 'Incorrect login or password';
    }

}