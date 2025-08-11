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
}










?>