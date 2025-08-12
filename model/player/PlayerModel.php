<?php 

require 'conexao/Conexao.php';

class PlayerModel extends Connection{

    public function __construct()
    {
        parent::Connection();
    }

    public function List(){
        $query = 'SELECT * FROM tb_fju_player';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Insert($aPayLoad){
        $query = 'INSERT INTO tb_fju_player (name,phone,email,status,created_at) VALUES ("'.$aPayLoad['name'].'","'.$aPayLoad['phone'].'", "'.$aPayLoad['email'].'", "'.$aPayLoad['status'].'","'.$aPayLoad['created_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function GetById($playerId){
        $query = 'SELECT * FROM tb_fju_player WHERE id="'.$playerId.'"';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Update($aPayLoad,$playerId){
        $query = 'UPDATE tb_fju_player SET name="'.$aPayLoad['name'].'",phone="'.$aPayLoad['phone'].'",email="'.$aPayLoad['email'].'",
        status="'.$aPayLoad['status'].'", updated_at="'.$aPayLoad['updated_at'].'" WHERE id="'.$playerId.'"';
        $stmt = $this->conn->prepare($query);
      
        return $stmt->execute();
    }

    public function Delete($playerId){
        $query = 'DELETE FROM tb_fju_player WHERE id="'.$playerId.'"';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(); 
    }
}










?>