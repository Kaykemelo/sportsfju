<?php 

require_once 'conexao/Conexao.php';

class MatchStatusModel extends Connection {

    public function __construct(){
        
        parent::Connection();
    }

    public function getDataStatus(){
        $query = 'SELECT * FROM tb_fju_match_status';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
}

?>