<?php
require 'model/category/CategoryModel.php';

class CategoryController{

    public function getList(){

        $obj = new CategoryModel();

        $aCategory = $obj->getDataCategory();
        include 'view/category/List.php';
    }

    public function Insert(){

        $oCategory = new CategoryModel();

        if (isset($_POST['name'])&& isset($_POST['status'])) {

            $name = $_POST['name'];
            $status = ($_POST['status'] === 'ativo') ? 1 : 0;
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $createdat = $date;
            $updatedat = $date;

            try {
                 $sucess = $oCategory->InsertCategory($name,$status,$createdat,$updatedat);
                 $msg = 'Cadastro realizado';
                 header("Location: ?route=categorias-insert&msg=".$msg);
                 exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
         include 'view/category/create.php';
         
    }

   public function Update($id){
    
        $oCategory = new CategoryModel();

        if (isset($id)) {
            $aCategoryId = $oCategory->getById($id);
            
        }

        if (isset($_POST['name']) && isset($_POST['status'])) {
           $name = $_POST['name'];
           $status = ($_POST['status'] === 'ativo') ? 1 : 0;
           
           $date = (new DateTime())->format('Y-m-d H:i:s.v');
           $updatedat = $date;

            try {
                 $sucess = $oCategory->UpdateCategory($name,$status,$updatedat,$id);
                 $msgUpdate = 'Registro Alterado';
                 $aCategoryId = $oCategory->getById($id);
                 header("Location: ?route=categorias-update&id=".$id."&msgUpdate=".$msgUpdate); 
                 exit;

            } catch (Exception $e) {
                echo "Erro". $e->getMessage();
            }
        }        
         include 'view/category/edit.php';
   }

    public function Delete($id){

        $oCategory = new CategoryModel();
                                         
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