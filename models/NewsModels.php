<?php

class NewsModels{

    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function readAll($id){
        $query = 'SELECT * FROM `articles` WHERE `id` = ? ORDER BY date_at DESC';
        
        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            return false;
        }
    }

    public function readlife(){
        try{
            $stmt = $this->db->query("SELECT * FROM `articles` WHERE `type` = 'life' ORDER BY date_at DESC");

            $allnews = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $allnews[] = $row;
            }
            return $allnews;
        }catch(PDOException $e){
            return false;
        }
        
    }

    public function readpolicy(){
        try{
            $stmt = $this->db->query("SELECT * FROM `articles` WHERE `type` = 'policy' ORDER BY date_at DESC");

            $allnews = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $allnews[] = $row;
            }
            return $allnews;
        }catch(PDOException $e){
            return false;
        }
        
    }

    public function readsport(){
        try{
            $stmt = $this->db->query("SELECT * FROM `articles` WHERE `type` = 'sport' ORDER BY date_at DESC");

            $allnews = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $allnews[] = $row;
            }
            return $allnews;
        }catch(PDOException $e){
            return false;
        }
        
    }

//     INSERT INTO articles (type,name,discription,author) VALUES 
// ('sport','','','НГС новости'),
// ('life','','','НГС новости'),
// ('policy','','','НГС новости')
}


?>