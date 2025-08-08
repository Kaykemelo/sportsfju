<?php
require 'model/category/CategoryModel.php';

class CategoryController{

    public function getList(){

        $categoryModel = new CategoryModel();

        $Categorys = $categoryModel->getDataCategory();
        include 'view/category/List.php';
    }

    public function Insert(){

        $categoryModel = new CategoryModel();

        if (isset($_POST['name'])&& isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] === 'ativo') ? 1 : 0;
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;
            $_POST['updated_at'] = $date;

            try {
                 $categoryModel->InsertCategory($_POST);
                 $msg = 'Cadastro realizado';
                 header("Location: ?route=categorias-insert&msg=".$msg);
                 exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
         include 'view/category/create.php';
         return;
         
    }

   public function Update($idCategory){
    
        $categoryModel = new CategoryModel();
          
        if (isset($idCategory)) {
            $CategoryId = $categoryModel->getById($idCategory);
           
        }

        if (isset($_POST['name']) && isset($_POST['status'])) {
           $_POST['status'] = ($_POST['status'] === 'ativo') ? 1 : 0;
           
           $date = (new DateTime())->format('Y-m-d H:i:s.v');
           $_POST['updated_at'] = $date;

            try {
                 $categoryModel->UpdateCategory($_POST,$idCategory);
                 $msgUpdate = 'Registro Alterado';
                 $CategoryId = $categoryModel->getById($idCategory);
                 header("Location: ?route=categorias-update&id=".$idCategory."&msgUpdate=".$msgUpdate); 
                 exit;

            } catch (Exception $e) {
                echo "Erro". $e->getMessage();
            }
        }        
         include 'view/category/edit.php';
         return;
   }

    public function Delete($idCategory){

        $categoryModel = new CategoryModel();
                                         
        try {
            $categoryModel->DeleteCategory($idCategory);
            $msgDelete = 'Categoria Excluida';
            // retorna para a pagina de listagem atraves do redirect 
            header("Location: ?route=categorias&msgDelete=".$msgDelete); 
            exit;
        } catch (Exception $e) {
            echo 'Erro'. $e->getMessage();
        }
   }
   
    
}  



?>