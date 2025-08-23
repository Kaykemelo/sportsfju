<?php 

require 'model/user/UserModel.php';

class UserController {

   public function userList(){
    $oUserModel = new UserModel();

        try {
            $users = $oUserModel->getDataUser();
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }

    include 'view/user/list.php';
   } 

    public function registerUser(){
        $oUserModel = new UserModel();

        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            try {
                $oUserModel->userRegister($_POST);
                $msgRegister = 'Cadastro de Usuario Concluido';
                header("Location: ?route=usuarios&msgRegister=".$msgRegister);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }

        }
        include 'view/user/register.php';
        return;
    }

    public function userUpdate($userId){
        $oUserModel = new UserModel();

        if (isset($userId)) {
            $aUser = $oUserModel->getUserId($userId);
        }

        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updated_at'] = $date;

            try {
                $oUserModel->userUpdate($userId,$_POST);
                $msg = 'Usuario Alterado';
                header("Location: ?route=usuario-update&id=".$userId."&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage(); 
            }
        }
        include 'view/user/edit.php';
        return;
    }

    public function userDelete($userId){
        $oUserModel= new UserModel();
            try {
                $oUserModel->userDelete($userId);
                $msg = 'Usuario Excluido';
                header("Location: ?route=usuarios&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
            return;
    }

    public function loginUser(){
        $oUserModel = new UserModel();

        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            try{
                $user = $oUserModel->authentication($_POST);

                if ($user) {
                    $this->createSession($user);
                    header("location: ?route=categorias");
                    exit;
                } else {
                    $msgErro = 'Usuario Não Encontrado';
                    header("location: ?route=usuario-login&msgErro=".$msgErro);
                    exit;
                }
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }  

        }
        include 'view/user/login.php';
        return;
    }

    public function createSession($user){
        session_start();

        $_SESSION['id_user'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
    }
}








?>