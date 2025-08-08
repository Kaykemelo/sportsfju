<?php
require 'model/championship/ChampionshipModel.php';
require_once 'model/category/CategoryModel.php';

class ChampionshipController {

    public function List(){
        
        try {
         $championshipModel = new ChampionshipModel();

        $aChampionship = $championshipModel->List();
        include 'view/championship/list.php';

        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
       
    }

    public function Insert(){

        $categoryModel = new CategoryModel();
        $Categorys = $categoryModel->getDataCategory();

        $championshipModel = new ChampionshipModel();

        if (isset($_POST['name'])&& isset($_POST['category'])&& isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;
            
            try {
            $championshipModel->Insert($_POST);
            $msg = 'Campeonato Cadastrado';
            header("Location: ?route=campeonatos-insert&msg=".$msg);
            exit;

            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/championship/create.php';
        return;
    }

    public function Update($championshipId){
        //pega as categorias que existe e um campeonato especifico

        if (isset($championshipId)) {
            $categoryModel = new CategoryModel();
            $aCategory = $categoryModel->getDataCategory();
           
            $championshipModel = new ChampionshipModel(); 
            $championship =  $championshipModel->getById($championshipId);
        }
        
        
        if (isset($_POST['name']) && isset($_POST['category']) && isset ($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updatedat'] = $date;

            try {
                $championshipModel->Update($_POST,$championshipId);
                $msg = "Campeonato Alterado"; 
                header("Location: ?route=campeonatos-update&id=".$championshipId."&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }

        include 'view/championship/edit.php';
        return;
    }

    public function Delete($championshipId){
       
        $championshipModel = new ChampionshipModel();
        
        try {
            $championshipModel->Delete($championshipId);
            $msg = 'Campeonato Excluido';
            header("Location: ?route=campeonatos&msg=".$msg); 
            exit;
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }

        return;
    }
}   
?>