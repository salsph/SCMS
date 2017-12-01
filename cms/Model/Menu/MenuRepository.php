<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
    public function getAll(){
        $sql = $this->query_builder->select()->from('menu')->orderBy('id', 'ASC')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }
}