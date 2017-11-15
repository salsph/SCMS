<?php

namespace Admin\Controller;


class SettingController extends AdminController
{
    public function main(){
        $setting_model = $this->load->model('setting');
        $this->data['settings'] = $setting_model->repository->getSettings();

        $this->view->render('setting/setting_list', $this->data);
    }

}