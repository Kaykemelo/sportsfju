<?php

require_once 'model/match/MatchModel.php';
require_once 'model/team/TeamModel.php';
require_once 'model/matchStatus/MatchStatusModel.php';
require_once 'controller/verification/Verification.php';

class MatchController {

    public function List($module ='admin'){
        $matchModel = new MatchModel();
        $oVerification = new VerificationController();

        try {
            $matches = $matchModel->List();
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }

        $oVerification->checkSession();
        include "view/$module/match/list.php";
        return;

    }

    public function Insert($module = 'admin'){

        $oVerification = new VerificationController();
        $TeamModel = new TeamModel();
        $Teams = $TeamModel->getDataTeam();

        $matchModel = new MatchModel();
        $oMatchStatus = new MatchStatusModel();
        $aMatchStatus = $oMatchStatus->getDataStatus();


        if (isset($_POST['round']) && isset($_POST['home_team']) && isset($_POST['away_team']) && isset($_POST['home_goals']) && isset($_POST['away_goals']) && isset($_POST['status']) ) {

            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['created_at'] = $date;

            try {
                $matchModel->Insert($_POST);
                $msg = 'Partida Criada';
                header("Location: ?route=partidas-insert&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }

        $oVerification->checkSession();
        include "view/$module/match/create.php";
        return;
    }

    public function Update($matchId,$module = 'admin'){

        $oVerification = new VerificationController();
        $matchModel = new MatchModel();
        $TeamModel = new TeamModel();
        $oMatchStatus = new MatchStatusModel();

        if (isset($matchId)) {
            $match = $matchModel->getById($matchId);
            $Teams = $TeamModel->getDataTeam();
            $aMatchStatus = $oMatchStatus->getDataStatus();
        }

        if (isset($_POST['round']) && isset($_POST['home_team']) && isset($_POST['away_team']) && isset($_POST['home_goals']) && isset($_POST['away_goals']) && isset($_POST['status'])) {

            $date = (new DateTime())->format('Y-m-d H:i:s.v');
            $_POST['updated_at'] = $date;

            try {
                $matchModel->Update($_POST,$matchId);
                $msg = 'Partida Alterada';
                header("Location: ?route=partidas-update&id=".$matchId."&msg=".$msg);
                exit;
            } catch (Exception $e) {
                echo "Erro".$e->getMessage();
            }
        }

        $oVerification->checkSession();
        include "view/$module/match/edit.php";
        return;
    }

    public function Delete($matchId,$module = 'admin'){
        $matchModel = new MatchModel();

        try {
            $matchModel->Delete($matchId);
            $msg = 'Partida Excluida';
            header("Location: ?route=partidas&msg=".$msg);
            exit;

        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
        }
        
        return;
    }
}




















?>