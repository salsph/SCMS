<?php

namespace Engine;


class Load
{
    /*
     * namespace pattern for model entity
     */
    const MASK_MODEL_ENTITY = '\%s\Model\%s\%s';

    /*
     * namespace pattern for model repository
     */
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';

    /**
     * namespace pattern for language
     */
    const MASK_LANGUAGE = 'Language\%s\%s.json';

    /**
     * @var \Engine\DI\DI
     */
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * @param $model_name
     * @param bool $model_dir
     * @return \stdClass
     */
    public function model($model_name, $model_dir = false, $env = false){

        global $di;
        $env = $env ? ucfirst($env) : ENV;

        $model_name = ucfirst($model_name);
        $model = new \stdClass();
        $model_dir = $model_dir ? ucfirst($model_dir) : $model_name;

        $entity = sprintf(self::MASK_MODEL_ENTITY, $env, $model_dir, $model_name);
        $repository = sprintf(self::MASK_MODEL_REPOSITORY, $env, $model_dir, $model_name);

        $model->entity = $entity;

        $model->repository = new $repository($di);

        return $model;
    }


    /**
     * @param $path
     * @return mixed
     */
    public function language($path){
        $file = sprintf(self::MASK_LANGUAGE, 'english', $path);

        $lang_json = file_get_contents($file);
        $content = json_decode($lang_json, true);

        $lang_name = $this->toCamelCase($path);

        $curr = $this->di->get('language');
        $language = isset($curr) ? $curr : new \stdClass();
        $language->{$lang_name} = $content;


        $this->di->set('language', $language);

        return $content;
    }

    /**
     * @param $str
     * @return string
     */
    private function toCamelCase($str){
        $replace = preg_replace('/[^a-zA-Z0-9]/', ' ', $str);
        $convert = mb_convert_case($replace, MB_CASE_TITLE);
        $res = lcfirst(str_replace(' ', '', $convert));

        return $res;
    }

}