<?php 

require 'conexao/Conexao.php';

class RoundModel extends Connection{

    public function __construct()
    {
        parent::Connection();
    }

    public function List(){
        $query = 'SELECT * FROM tb_fju_round';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Insert($aPayLoad){
        $query = 'INSERT INTO tb_fju_round (round_number,date_round,status_id,created_at) VALUES ("'.$aPayLoad['round'].'", "'.$aPayLoad['date'].'","'.$aPayLoad['status'].'","'.$aPayLoad['created_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function getById($roundId){
        $query = 'SELECT * FROM tb_fju_round WHERE id="'.$roundId.'" ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Update($aPayLoad,$roundId){
        $query = 'UPDATE tb_fju_round SET round_number="'.$aPayLoad['round_number'].'", date_round="'.$aPayLoad['date_round'].'",status_id="'.$aPayLoad['status'].'",updated_at="'.$aPayLoad['updated_at'].'" WHERE id="'.$roundId.'" ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function Delete($roundId){
        $query = 'DELETE FROM tb_fju_round WHERE id="'.$roundId.'" ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }
}



?>