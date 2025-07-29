<?php
require 'model/category/ModelCategory.php';

class ControllerCategory{

    public function getList(){

        $obj = new ModelCategory();

        $aCategory = $obj->getDataCategory();
        include 'view/category/List.php';
    }

    public function Insert(){

        $oCategory = new ModelCategory();

        if (isset($_POST['name'])&& isset($_POST['status'])) {

            $name = $_POST['name'];
            $status = ($_POST['status'] === 'ativo') ? true : false;
            
            $now = (new DateTime())->format('Y-m-d H:i:s.v');
            $createdat = $now;
            $updatedat = $now;

            $sucess = $oCategory->InsertCategory($name,$status,$createdat,$updatedat);

            if ($sucess) {
                $msg = 'Cadastro realizado';

            } else{
                $erro = 'Erro ao Cadastrar';
            }
            
        }
         include 'view/category/create.php';
    }
}



?>