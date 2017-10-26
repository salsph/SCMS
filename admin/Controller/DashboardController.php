<?php
namespace Admin\Controller;


class DashboardController extends AdminController
{
    public function index(){
        //$user_model = $this->load->model('user');
        //$users = $user_model->repository->getUsers();
        //print_r($users);
        $this->view->render('dashboard');
    }

}