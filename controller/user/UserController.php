<?php 

require 'model/user/UserModel.php';

class UserController {

    public function registerUser(){
        $oUserModel = new UserModel();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
            
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;
        }

        try {
            $oUserModel->userRegister($_POST);
            $msgRegister = 'Cadastro Concluido, Faça seu Login pra continuar';
            header("Location: ?route=usuario-login&msgRegister=".$msgRegister);
            exit;
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
    }
        include 'view/user/register.php';
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
    }

    public function createSession($user){
        session_start();

        $_SESSION['id_user'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
    }
}








?>