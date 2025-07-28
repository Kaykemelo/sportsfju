<?php

class Connection {

    private string $servername = 'localhost';
    private string $dbname = 'fju';
    private string $username = 'root';
    private string $password = '';
    public $conn;

    public function Connection(){

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          
        } catch (PDOException $e) {
            echo "Erro na Conexão". $e->getMessage(); 
        }
    
    }
    
}


?>