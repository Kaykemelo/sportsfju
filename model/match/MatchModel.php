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

    public function Insert($aPayload){
        $query = 'INSERT INTO tb_fju_match (round_id,home_team_id,away_team_id,home_goals,away_goals,status_id,created_at) 
        VALUES ("'.$aPayload['match'].'","'.$aPayload['home_team'].'","'.$aPayload['away_team'].'","'.$aPayload['home_goals'].'","'.$aPayload['away_goals'].'","'.$aPayload['status'].'","'.$aPayload['created_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }


}















?>