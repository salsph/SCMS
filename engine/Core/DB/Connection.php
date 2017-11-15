<?php

namespace Engine\Core\DB;


use \PDO;
use \Engine\Core\Config\Config;

class Connection
{
    /**
     * @var PDO
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return $this
     */
    private function connect(){
        $config = Config::file('db');
        $dsn = "mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=".$config['db_charset'];
        $this->link = new PDO($dsn, $config['db_user'], $config['db_password']);
        return $this;
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql, $params = []){
        $sth = $this->link->prepare($sql);
        $sth->execute($params);
        $resault = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($resault === false){
            return [];
        }
        return $resault;
    }

    /**
     * @param $sql
     * @return bool
     */
    public function execute($sql, $params = []){
        $sth = $this->link->prepare($sql);
        return $sth->execute($params);
    }

    public function lastInsertId(){
        return $this->link->lastInsertId();
    }

}