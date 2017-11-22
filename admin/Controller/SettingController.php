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

}