<?php

namespace Admin\Controller;


class PostController extends  AdminController
{
    public function listing(){
        $this->data['posts'] = $this->load->model('post')->repository->getPosts();
        $this->view->render('post/post_list', $this->data);
    }

    public function create(){
        $this->view->render('post/post_adding');
    }

    public function add(){
        $params = $this->request->post;
        if (isset($params['title']) && $params['title'] !== ''){
            $post_model = $this->load->model('post');
            $id = $post_model->repository->addPost($params);
            echo $id;
        }

    }

}