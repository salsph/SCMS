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

    public function update($params){
        foreach ($params as $param => $value){
            $sql = $this->query_builder->update('setting')->set(['value' => $value])->where('field_key', $param)->sql();
            $data = $this->query_builder->getValues();

            $this->db->execute($sql, $data);
        }

    }

    public function getSetting($key){
        $sql = $this->query_builder->select('value')->from('setting')->where('field_key', $key)->sql();
        $data = $this->query_builder->getValues();
        $res = $this->db->query($sql, $data);

        return isset($res[0]) ? $res[0]['value'] : null;
    }

}