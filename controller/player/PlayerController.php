<?php 

require_once 'model/player/PlayerModel.php';

class PlayerController {

    public function List(){
        $playerModel = new PlayerModel();

        try {
            
            $Players = $playerModel->List();
            
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        include 'view/player/list.php';
        return;
    }   

    public function Insert(){
        $playerModel = new PlayerModel();

        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            try {
                
                $playerModel->Insert($_POST);
                $msg = 'Jogador Criado';
                header('Location: ?route=jogadores-insert&msg='.$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/player/create.php';
        return;
    }

    public function Update($playerId){
        $playerModel = new PlayerModel();

        if (isset($playerId)) {
            $Player = $playerModel->GetById($playerId);
        }
       
        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['status']) ) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updated_at'] = $date;
           
            try {
                $playerModel->Update($_POST,$playerId);
                $msg = 'Jogador Alterado';
                header("Location: ?route=jogadores-update&id=".$playerId."&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
            

        }

        include 'view/player/edit.php';
        return;
    }

    public function Delete($playerId){
        $playerModel = new PlayerModel();

        try {
           
            $playerModel->Delete($playerId);
            $msg = 'Jogador Excluido';
            header("Location: ?route=jogadores&msg=".$msg);
            exit;
               
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        return;
    }


}
?>