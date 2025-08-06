<?php
require 'model/championship/ChampionshipModel.php';
require_once 'model/category/CategoryModel.php';

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

    public function Insert(){

        $obj = new CategoryModel();
        $aCategory = $obj->getDataCategory();

        $obj = new ChampionshipModel();

        if (isset($_POST['name'])&& isset($_POST['category'])&& isset($_POST['status'])) {
            $name = $_POST['name'];
            $categoryId = $_POST['category'];
            $status = ($_POST['status'] == 'ativo') ? 1 : 0;

            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $createdat = $date;
            
            try {
            $sucess = $obj->Insert($categoryId,$name,$status,$createdat);
            $msg = 'Campeonato Cadastrado';
            header("Location: ?route=campeonatos-insert&msg=".$msg);
            exit;

            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/championship/create.php';
    }
}   
?>