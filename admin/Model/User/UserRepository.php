<?php

namespace Admin\Model\User;

use \Engine\Model;

class UserRepository extends Model
{
    public function getUser($login, $password){
        $sql = $this->query_builder->select()->from('user')->where('login', $login)->where('password', $password)->where('role', 'admin')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

    public function getUsers(){
        $sql = $this->query_builder->select()->from('user')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

    public function test(){
        $user = new User();
        $user->setLogin('mik');
        $user->setEmail('mik@mail.ru');
        $user->setPassword('0a845f99b6a57591e9314a5950d31882');
        $user->setRole('user');
        $user->save();

    }

}