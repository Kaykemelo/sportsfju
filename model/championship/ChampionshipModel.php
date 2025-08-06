<?php

require 'conexao/Conexao.php';

class ChampionshipModel extends Connection{

    public function __construct()
    {
        parent::Connection();
    }

    public function List(){
        $query = 'SELECT * FROM tb_fju_championship';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
       
    }
    
    public function Insert($categoryId,$name,$status,$createdat){
        $query = 'INSERT INTO tb_fju_championship (category_id,name,status,created_at) VALUES ("'.$categoryId.'","'.$name.'","'.$status.'","'.$createdat.'")';
        $stmt = $this->conn->prepare($query);
      
        return $stmt->execute();

    }

    public function getByID($id){
        $query = 'SELECT * FROM tb_fju_championship WHERE id="'.$id.'"  ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Update($aPayload,$categoryId){
        $query = 'UPDATE tb_fju_championship SET name="'.$aPayload['name'].'", category_id="'.$aPayload['category'].'",status="'.$aPayload['status'].'",updated_at="'.$aPayload['updatedat'].'" WHERE id="'.$categoryId.'"';
        $stmt = $this->conn->prepare($query);
       
        return $stmt->execute();
    }

    public function Delete($id){
        $query = 'DELETE FROM tb_fju_championship WHERE id="'.$id.'" ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

}
?>