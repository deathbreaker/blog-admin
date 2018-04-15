<?php

namespace Badassprof\Controllers;


use Badassprof\Providers\Database;

class ArticleController{

    private static $db;
    private static $conn;

    public static function all(){}

    public static function store(){

        $nazev = $_POST['nazev'];
        $obsah = $_POST['obsah'];
        $autor = $_POST['autor'];

        $sql = "INSERT INTO clanky (id, nadpis, obsah, autor, datum)
        VALUES (null, '$nazev', '$obsah', '$autor',  null)";

        try{
            self::$db = new Database();
            self::$conn = self::$db->getConn();
            $stmt = self::$conn->prepare($sql);
            $stmt->execute();

        }
        catch(\Exception $e){
            print_r($e);
        }
        finally{
            return $stmt->closeCursor();
        }
    }


    public static function delete($id){}

    public static function update($id){}

    public static function show($id){}
}


