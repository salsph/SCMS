<?php

namespace Admin\Controller;


class SettingController extends AdminController
{
    public function main(){
        $setting_model = $this->load->model('setting');
        $this->data['settings'] = $setting_model->repository->getSettings();
        $this->data['languages'] = language();

        $this->view->render('setting/setting_list', $this->data);
    }

    public function update(){
        $setting_model = $this->load->model('setting');

        $params = $this->request->post;
        //print_r($params);
        $setting_model->repository->update($params);
    }

    public function menus(){
        $menu_model = $this->load->model('menu', false, 'Cms');
        $item_model = $this->load->model('menuItem', false, 'Cms');

        $this->data['menu_id'] = isset($this->request->get['menu_id']) ? $this->request->get['menu_id'] : null;
        $this->data['menus'] = $menu_model->repository->getAll();
        $this->data['menu_items'] = $item_model->repository->getItems($this->data['menu_id']);

        $this->view->render('setting/menus', $this->data);
    }

    public function menuAdd(){
        $menu_name = $this->request->post['name'];
        $menu_model = $this->load->model('menu', false, 'Cms');
        $id = $menu_model->repository->add($menu_name);
        echo $id;
    }

    public function menuItemAdd(){
        $params = $this->request->post;
        if (isset($params['menu_id']) && !empty($params['menu_id'])){
            $menu_item_model = $this->load->model('menuItem', false, 'Cms');
            $id = $menu_item_model->repository->addItem($params);
            $item = ['id' => $id, 'name' => \Cms\Model\MenuItem\MenuItemRepository::NEW_MENU_ITEM_NAME, 'href' => '#'];

            echo $this->view->getTheme()->block('setting/menu_item', $item);
        }
    }

    public function menuItemSort(){
        $data = $this->request->post;
        if(isset($data['data']) && isset($data['menu_id'])){
            $menu_item_model = $this->load->model('menuItem', false, 'Cms');
            $menu_item_model->repository->sortItems($data);
        }
    }

    public function menuItemRemove(){
        $data = $this->request->post;
        if (isset($data['item_id'])){
            $menu_item_model = $this->load->model('menuItem', false, 'Cms');
            echo $menu_item_model->repository->removeItem($data['item_id']);
        }
    }

    public function menuItemUpdate(){
        $params = $this->request->post;
        if ($params['id'] != '' && $params['value'] != ''){
            $menu_item_model = $this->load->model('menuItem', false, 'Cms');
            echo $menu_item_model->repository->updateItem($params);
        }
    }

}