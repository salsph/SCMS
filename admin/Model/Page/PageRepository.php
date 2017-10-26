<?php

namespace Admin\Model\Page;

use \Engine\Model;

class PageRepository extends Model
{
    public function getPages(){
        $sql = $this->query_builder->select()->from('page')->sql();
        return $this->db->query($sql, $this->query_builder->getValues());
    }

}