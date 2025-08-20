<?php

require_once 'conexao/Conexao.php';

class MatchModel extends Connection {

    public function __construct(){

        parent::Connection();
    }

    public function List(){
        $query = "SELECT  tb_fju_match.id, tb_fju_match.round_id, th.name as Time_Casa,ta.name AS Time_Visitante,
        tb_fju_match.home_goals AS Pontos_Time_Casa,tb_fju_match.away_goals AS Pontos_Time_Fora,
        
        case 
        when home_goals > away_goals then th.name 
        when away_goals > home_goals then ta.name 
        ELSE 'Empate'
        END AS Vencedor,
        tb_fju_match_status.description AS status
         
        FROM tb_fju_match 
        
        INNER JOIN tb_fju_team th ON th.id = tb_fju_match.home_team_id
        INNER JOIN tb_fju_team ta ON ta.id = tb_fju_match.away_team_id
        
        INNER JOIN tb_fju_match_status ON tb_fju_match.status_id = tb_fju_match_status.id 
         ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

    public function Insert($aPayload){
        $query = 'INSERT INTO tb_fju_match (round_id,home_team_id,away_team_id,home_goals,away_goals,status_id,created_at) 
        VALUES ("'.$aPayload['round'].'","'.$aPayload['home_team'].'","'.$aPayload['away_team'].'","'.$aPayload['home_goals'].'","'.$aPayload['away_goals'].'","'.$aPayload['status'].'","'.$aPayload['created_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function getById($matchId){
        $query = 'SELECT * FROM tb_fju_match WHERE id="'.$matchId.'" ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Update($aPayLoad,$matchId){
        $query = 'UPDATE tb_fju_match SET round_id="'.$aPayLoad['round'].'" ,home_team_id="'.$aPayLoad['home_team'].'", away_team_id="'.$aPayLoad['away_team'].'",
        home_goals="'.$aPayLoad['home_goals'].'",away_goals="'.$aPayLoad['away_goals'].'", status_id="'.$aPayLoad['status'].'" WHERE id="'.$matchId.'" ';
        $stmt = $this->conn->prepare($query);
        var_dump($query);
        exit;
        return $stmt->execute();
    }

    public function Delete($matchId){
        $query = 'DELETE FROM tb_fju_match WHERE id="'.$matchId.'" ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }
}















?>