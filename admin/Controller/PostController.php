<?php

namespace Admin\Controller;

use \Admin\Model\Post\Post;
use \Engine\Helper\Image;

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

    public function delete(){
        $params = $this->request->post;
        print_r($params);
        echo 'iii';
        if (isset($params['id']) && !empty($params['id'])){
            echo 'wer';
            $post_model = $this->load->model('post');
            echo $post_model->repository->deletePost($params);
        }
    }

    public function edit($id){
        $post_model = $this->load->model('post');
        $this->data['post'] = $post_model->repository->getPost($id);

        $this->view->render('post/post_edit', $this->data);
    }

    public function update(){
        $params = $this->request->post;
        $files = $this->request->files;

        if (isset($params['id']) && !empty($params['id'])){
            $directory = sprintf(POST::IMAGE_DIR_MASK, $params['id']);

            if( !Image::loadPng($files['image'], $directory,$params['id'], POST::IMAGE_MIME) ){
                //TODO add unsuccess load message
            }

            $params['image'] = $files['image'];
            die();
            $post_model = $this->load->model('post');
            $post_model->repository->updatePost($params);
        }

    }

}