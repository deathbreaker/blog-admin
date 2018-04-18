<?php

/**
 * Created by PhpStorm.
 * User: zak
 * Date: 13.4.2018
 * Time: 10:24
 */
namespace Deathbreaker\Providers;

class Database {

    private $sql;

    public $conn;

    public function __construct()
    {

        try {
            $server = "localhost";
            $admin = "root";
            $pass = "root";
            $db_name = "blog";

            $this->conn = new \PDO("mysql:host=$server;dbname=$db_name", $admin, $pass);

            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //$this->initDB();
        }
        catch (\PDOException $e){}

    }

    private function initDB(){

        try{
        $this->sql = "CREATE TABLE clanky (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nadpis VARCHAR(30) NOT NULL,
            obsah TEXT NOT NULL,
            autor VARCHAR(30) NOT NULL,
            datum TIMESTAMP
            )";

           $this->conn->exec($this->sql);
        }
        catch (\PDOException $e){}

    }

    public function getConn(){
        return $this->conn;
    }


}