<?php

require_once 'model/round/roundModel.php';

class RoundController {


    public function List($module = 'admin'){
        $roundModel = new RoundModel();

        try {
            $Rounds = $roundModel->List();
            
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        include "view/$module/round/list.php";
    }


    public function Insert($module = 'admin'){
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
        include "view/$module/round/create.php";
        return;
    }

    public function Update($roundId,$module = 'admin'){
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

        include "view/$module/round/edit.php";
        return;
    }

    public function Delete($roundId,$module = 'admin'){
        $roundModel = new RoundModel();

        try {
            $roundModel->Delete($roundId);
            $msg = 'Rodada Excluida';
            header("Location: ?route=rodadas&msg=".$msg);
            exit;
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        
        return;
    }
}


















?>