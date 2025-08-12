<?php

require_once 'model/round/roundModel.php';

class RoundController {


    public function List(){
        $roundModel = new RoundModel();

        try {
            $Rounds = $roundModel->List();
            
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        include 'view/round/list.php';
    }

}


















?>