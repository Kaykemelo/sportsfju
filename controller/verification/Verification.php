<?php 

class VerificationController {

    public function checkSession(){
        session_start();

        if (isset($_SESSION['id_user'])) {
            return true;
        }else {
            $msgUser = 'Faça o Login no Sistema';
            header("location: ?route=usuario-login");
            exit;
        }
    }
}

?>