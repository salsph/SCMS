<?php

namespace Admin\Model\Setting;

use \Engine\Core\DB\ActiveRecord;

class Setting
{
    protected $table = 'setting';

    private $id;

    private $name;

    private $field_key;

    private $value;

    use ActiveRecord;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->field_key;
    }

    /**
     * @param mixed $field_key
     */
    public function setFieldKey($field_key)
    {
        $this->field_key = $field_key;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}