<?php

namespace Badassprof\Article\Controllers;


use Badassprof\DataProvider\Database;

class ArticleController{

    public static $db;
    private static $conn;
    /**
     * Matches /article exactly
     *
     * @Route("/article/create", name="article_create")
     */
    public function create(){
        $blade = new Blade('view', 'cache');
        return $blade->make('new');
    }


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

}


