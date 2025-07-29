<?php
require 'conexao/Conexao.php';

class ModelCategory extends Connection{

    public function __construct()
    {
        parent::Connection(); // erdou o metodo connect da classe conexao
    }
    
    public function getDataCategory(){
        $query = "SELECT * FROM tb_fju_category";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

    public function InsertCategory($name,$status,$createdat,$updatedat){
        $query = 'INSERT INTO tb_fju_category (name,status,created_at,updated_at) VALUES ("'.$name.'","'.$status.'","'.$createdat.'","'.$updatedat.'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }
}



?>