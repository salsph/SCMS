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
     * @param $model_name
     * @param bool $model_dir
     * @return \stdClass
     */
    public function model($model_name, $model_dir = false){

        global $di;

        $model_name = ucfirst($model_name);
        $model = new \stdClass();
        $model_dir = $model_dir ? ucfirst($model_dir) : $model_name;

        $entity = sprintf(self::MASK_MODEL_ENTITY, ENV, $model_dir, $model_name);
        $repository = sprintf(self::MASK_MODEL_REPOSITORY, ENV, $model_dir, $model_name);

        $model->entity = $entity;
        $model->repository = new $repository($di);

        return $model;
    }

}