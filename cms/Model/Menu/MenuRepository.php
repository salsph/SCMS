<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
    public function getAll(){
        $sql = $this->query_builder->select()->from('menu')->orderBy('id', 'ASC')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

    public function add($name){
        //$sql = $this->query_builder->select()
        if ($name != ''){
            $menu = new Menu();
            $menu->setName($name);
            $id = $menu->save();
            return $id;
        }
    }
}