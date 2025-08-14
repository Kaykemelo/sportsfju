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



}




















?>