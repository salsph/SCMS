<?php

namespace Cms\Model\MenuItem;

use Engine\Model;

class MenuItemRepository extends Model
{
    const NEW_MENU_ITEM_NAME = 'New item';
    const FIELD_NAME = 'name';
    const FIELD_LINK = 'link';

    /**
     * @param $menu_id
     * @param array $params
     * @return mixed
     */
    public function getItems($menu_id, $params = []){
        $sql = $this->query_builder->select()->from('menu_item')->where('menu_id', $menu_id)->orderBy('position', 'ASC')->sql();
        $items = $this->db->query($sql, $this->query_builder->getValues());

        return $items;
    }

    public function addItem($params){
        $menu_item = new MenuItem();
        $menu_item->setName(self::NEW_MENU_ITEM_NAME);
        $menu_item->setMenuId($params['menu_id']);
        return $menu_item->save();
    }

    public function removeItem($item_id){
        $sql = $this->query_builder->delete()->from('menu_item')->where('id', $item_id)->sql();
        return $this->db->execute($sql, $this->query_builder->getValues());
    }

    public function sortItems($params){
        $sorted_items = json_decode($params['data']);

        foreach($sorted_items[0] as $position => $itm){
            $item = new MenuItem($itm->id);
            $item->setPosition($position);
            $item->save();
        }
    }

    public function updateItem($params){
        $item = new MenuItem($params['id']);
        if ($params['name'] == self::FIELD_LINK){
            $item->setHref($params['value']);
        } elseif($params['name'] == self::FIELD_NAME){
            $item->setName($params['value']);
        }
        return $item->save();
    }
}