<?php

namespace Engine\Core\Config;

class Repository
{
    /**
     * @var array Stored config items.
     */
    protected static $stored = [];

    /**
     * @param $group
     * @param $key
     * @param $data
     */
    public static function store($group, $key, $data)
    {
        if (!isset(static::$stored[$group]) || !is_array(static::$stored[$group])) {
            static::$stored[$group] = [];
        }

        static::$stored[$group][$key] = $data;
    }

    /**
     * @param $group
     * @param $key
     * @return bool
     */
    public static function retrieve($group, $key)
    {
        return isset(static::$stored[$group][$key]) ? static::$stored[$group][$key] : false;
    }

    /**
     * @param $group
     * @return bool|mixed
     */
    public static function retrieveGroup($group)
    {
        return isset(static::$stored[$group]) ? static::$stored[$group] : false;
    }
}