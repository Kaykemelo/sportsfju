<?php

require_once 'model/round/roundModel.php';

class RoundController {


    public function List(){
        $roundModel = new RoundModel();

        try {
            $Rounds = $roundModel->List();
            
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        include 'view/round/list.php';
    }


    public function Insert(){
        $roundModel = new RoundModel();

        
        if (isset($_POST['round_number']) && isset($_POST['date_round']) && isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            try {
                $roundModel->Insert($_POST);
                $msg = 'Rodada Criada';
                header("Location: ?route=rodadas-insert&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/round/create.php';
        return;
    }

    public function Update($roundId){
        $roundModel = new RoundModel();

        if (isset($roundId)) {
            $round = $roundModel->getById($roundId);
        }

        if (isset($_POST['round_number']) && isset($_POST['date_round']) && isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updated_at'] = $date;

            try {
                $roundModel->Update($_POST,$roundId);
                $msg = 'Rodada Alterada';
                header("Location: ?route=rodadas-update&id=".$roundId. "&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }

        include 'view/round/edit.php';
        return;
    }
}


















?>