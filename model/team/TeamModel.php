<?php 
  
require 'conexao/Conexao.php';  

class TeamModel extends Connection {

    public function __construct()
    {
        parent::Connection();
    }

    public function getDataTeam(){
        $query = 'SELECT * FROM tb_fju_team';
        $stmt = $this->conn->prepare($query);        
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

    public function Insert($aPayload){
        $query = 'INSERT INTO tb_fju_team (name,status,created_at) VALUES ("'.$aPayload['name'].'", "'.$aPayload['status'].'", "'.$aPayload['created_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }






}









?>