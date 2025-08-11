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






}
?>