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

    }

    public function Insert(){
        $matchModel = new MatchModel();

        if (isset($_POST['match']) && isset($_POST['home_team']) && isset($_POST['away_team']) && isset($_POST['home_goals']) && isset($_POST['away_goals']) && isset($_POST['status']) ) {

            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            $_POST['status'] = ($_POST['status'] = 'Ativa') ? 1 : 0;


            $matchModel->Insert($_POST);
        }








        include 'view/match/create.php';
    }

}




















?>