<?php

namespace Admin\Model\Setting;

use \Engine\Model;

class SettingRepository extends Model
{
    public function getSettings(){
        $sql = $this->query_builder->select()->from('setting')->sql();
        $res = $this->db->query($sql);
        return $res;
    }

}