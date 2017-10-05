<?php

namespace Cms\Controller;

class HomeController extends  CmsController
{

    public function index(){
        $this->view->render('index', ['boy' => 'EEEEEEEEEEEEEEEE, BOY']);
    }

    public function news($id){
        echo "News page, news number " . $id;
    }
}