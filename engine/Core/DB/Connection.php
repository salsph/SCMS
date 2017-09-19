<?php

namespace Engine\Core\DB;

use \PDO;

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
        //$config = require_once "config.php";
        $config = [
            'host' => 'localhost',
            'db_name' => 'test',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ];
        $dsn = "mysql:host=".$config['host'].";dbname=".$config['db_name'].";charset=".$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        return $this;
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql){
        $sth = $this->link->prepare($sql);
        $sth->execute();
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
    public function execute($sql){
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }

}