<?php

require_once 'model/match/MatchModel.php';

class MatchController {

    public function List(){
        $matchModel = new MatchModel();

        try {
            $matches = $matchModel->List();
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        include 'view/match/list.php';
        return;

    }

    public function Insert(){
        $matchModel = new MatchModel();

        if (isset($_POST['match']) && isset($_POST['home_team']) && isset($_POST['away_team']) && isset($_POST['home_goals']) && isset($_POST['away_goals']) && isset($_POST['status']) ) {

            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;

            try {
                $matchModel->Insert($_POST);
                $msg = 'Partida Criada';
                header("Location: ?route=partidas-insert&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/match/create.php';
        return;
    }

}




















?>