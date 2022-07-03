<?php

class Connector
{
    const serverName = "localhost";
    const userName = "root";
    const password = "";
    const dbName = "t2108m";

    private static $_instance;
    public $_conn;

    /**
     * Connector constructor.
     */
    private function __construct(){
        $this->_conn = new mysqli(self::serverName,self::userName,
            self::password,self::dbName);
        if($this->_conn->connect_error){
            die($this->_conn->connect_error);
        }

    }

    /**
     * @return Connector
     */
    public static function createInstance(){
        if(self::$_instance == null){
            self::$_instance = new Connector();
        }
        return self::$_instance;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function createStatement($sql){
        return $this->_conn->prepare($sql);
    }

    public function query($sql) {
        return $this ->_conn->query($sql);
    }
}