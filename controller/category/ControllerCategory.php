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
            $status = ($_POST['status'] === 'ativo') ? 1 : 0;
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $createdat = $date;
            $updatedat = $date;

            $sucess = $oCategory->InsertCategory($name,$status,$createdat,$updatedat);

            if ($sucess) {
                $msg = 'Cadastro realizado';

            } else{
                $erro = 'Erro ao Cadastrar';
            }
            
        }
         include 'view/category/create.php';
         
    }

   public function Update($id){
    
        $oCategory = new ModelCategory();

        if (isset($id)) {
            $aCategoryId = $oCategory->getById($id);
            
        }

        if (isset($_POST['name']) && isset($_POST['status'])) {
           $name = $_POST['name'];
           $status = ($_POST['status'] === 'ativo') ? 1 : 0;
           
           $date = (new DateTime())->format('Y-m-d H:i:s.v');
           $updatedat = $date;

           $sucess = $oCategory->UpdateCategory($name,$status,$updatedat,$id);

           if ($sucess) {
                $msgUpdate = 'Registro Alterado';
                $aCategoryId = $oCategory->getById($id);
           } else {
                $erroUpdate = 'Erro ao Alterar';
           }
           
        }
        include 'view/category/edit.php';
   }

    public function Delete($id){

        $oCategory = new ModelCategory();
                                         
        try {
            $sucess = $oCategory->DeleteCategory($id);
            $msgDelete = 'Categoria Excluida';
            // retorna para a pagina de listagem atraves do redirect 
            header("Location: ?route=categorias&msgDelete=".$msgDelete); 

        } catch (Exception $e) {
            echo 'Erro'. $e->getMessage();
        }
   }
   
    
}  



?>