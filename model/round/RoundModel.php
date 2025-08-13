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
}



?>