<?php
require 'model/championship/ChampionshipModel.php';

class ChampionshipController {

    public function List(){
        
        try {
         $obj = new ChampionshipModel();

        $aChampionship = $obj->List();
        include 'view/championship/list.php';

        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
       
    }
}
?>