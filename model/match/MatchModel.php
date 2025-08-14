<?php

require 'conexao/Conexao.php';

class MatchModel extends Connection {

    public function __construct(){

        parent::Connection();
    }

    public function List(){
        $query = 'SELECT * FROM tb_fju_match';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
}















?>