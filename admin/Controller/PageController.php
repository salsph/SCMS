<?php

namespace Admin\Controller;


class PageController extends  AdminController
{
    public function listing(){
        $this->data['pages'] = $this->load->model('page')->repository->getPages();
        $this->view->render('page/page_list', $this->data);
    }

    public function create(){
        $this->view->render('page/page_adding');
    }

    public function add(){
        $params = $this->request->post;
        $page_model = $this->load->model('page');

        print_r($params);

        if ($params['title'] !== '' && $params['content'] !== ''){
            $page_id = $page_model->repository->newPage($params);
            //echo $page_id;
        }

    }

    public function edit($id){
        $page_model = $this->load->model('page');
        $this->data['page'] = $page_model->repository->getPage($id);

        $this->view->render('page/page_edit', $this->data);
    }

    public function update(){
        $params = $this->request->post;
        $page_model = $this->load->model('page');
        $page_model->repository->updatePage($params);
    }
}