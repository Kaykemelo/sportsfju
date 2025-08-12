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


}



?>