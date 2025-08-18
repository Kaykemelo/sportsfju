<?php 

require 'model/team/TeamModel.php';

class TeamController {

    public function List(){

        try {
            $TeamModel = new TeamModel();
            $teams = $TeamModel->getDataTeam();
            include 'view/team/list.php';

        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        return;
    } 

    public function Insert(){

        $TeamModel = new TeamModel();

        if (isset($_POST['name']) && isset($_POST['status']) ) {

            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0 ;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            try {
                $TeamModel->Insert($_POST);
                $msg = 'Time Criado';
                header("Location: ?route=times-insert&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/team/create.php';
        return;
    }

    public function Update($teamId){

        if (isset($teamId)) {

            $teamModel = new TeamModel();
            $team = $teamModel->getTeamId($teamId);
           
        }

        if (isset($_POST['name']) && isset($_POST['status'])) {
            $_POST['status'] = ($_POST['status'] == 'ativo') ? 1 : 0;
            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updated_at'] = $date;
           
            try {
                $teamModel->Update($_POST,$teamId);
                $msg = 'Time Alterado';
                header("Location: ?route=times-update&id=".$teamId."&msg=".$msg); 
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }
        include 'view/team/edit.php';
        return;  

    }


    public function Delete($teamId){
        $TeamModel = new TeamModel();

        try {
        
            $TeamModel->Delete($teamId);
            $msg = 'Time Excluido';
            header("Location: ?route=times&msg=".$msg);
            exit;
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }

        return;
    }

}





























?>