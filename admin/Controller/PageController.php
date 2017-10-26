<?php

namespace Admin\Controller;


class PageController extends  AdminController
{
    public function listing(){
        $data['pages'] = $this->load->model('page')->repository->getPages();
        $this->view->render('page/page_list', $data);
    }

    public function add(){
        $this->view->render('page/page_adding');
    }
}