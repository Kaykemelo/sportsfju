<?php 

require_once 'conexao/Conexao.php';

class UserModel extends Connection {

    public function __construct(){
        
        parent::Connection();
    }

    public function userRegister($aPayLoad){
        $query = 'INSERT INTO tb_fju_user (name,email,password,created_at) VALUES ("'.$aPayLoad['name'].'", "'.$aPayLoad['email'].'", "'.$aPayLoad['password'].'","'.$aPayLoad['created_at'].'" )';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function authentication($aPayLoad){
        $query = "SELECT * FROM tb_fju_user WHERE email='".$aPayLoad['email']."' AND password='".$aPayLoad['password']."' ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserId($userId){
        $query = 'SELECT * FROM tb_fju_user WHERE id="'.$userId.'" ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function userUpdate($userId,$aPayLoad){
        $query = 'UPDATE tb_fju_user SET name="'.$aPayLoad['name'].'",email="'.$aPayLoad['email'].'",password="'.$aPayLoad['password'].'", updated_at="'.$aPayLoad['updated_at'].'" WHERE id="'.$userId.'"  ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }
    
    public function getDataUser(){
        $query = 'SELECT * FROM tb_fju_user';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }
}
























?>