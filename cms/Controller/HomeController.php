<?php

namespace Cms\Controller;

class HomeController extends  CmsController
{

    public function index(){
        $post_model = $this->load->model('post', false, 'admin');
        $post_list = $post_model->repository->getPosts();
        $this->data['post_list'] = $post_list;
        $this->view->render('index', $this->data);
    }

    public function news($id){
        echo "News Page, news number " . $id;
    }

}