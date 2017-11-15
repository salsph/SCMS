<?php

namespace Admin\Model\Page;

use \Engine\Model;

class PageRepository extends Model
{
    public function getPages(){
        $sql = $this->query_builder->select()->from('page')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

    public function newPage($params){
        $title = $params['title'];
        $content = $params['content'];

        $page = new Page();
        $page->setTitle($title);
        $page->setContent($content);
        $page_id = $page->save();
        return $page_id;
    }

    public function getPage($id){
        $page = new Page($id);
        return $page->findOne();
    }

    public function updatePage($params){
        if(isset($params['id'])){
            $page = new Page($params['id']);
            $page->setContent($params['content']);
            $page->setTitle($params['title']);
            $page->save();
        }
    }

}