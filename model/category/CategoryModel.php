<?php
require_once 'conexao/Conexao.php';

class CategoryModel extends Connection{

    public function __construct()
    {
        parent::Connection(); // erdou o metodo connect da classe conexao
    }
    
    public function getDataCategory(){
        $query = "SELECT * FROM tb_fju_category";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_ASSOC);
    }

    public function InsertCategory($aPayload){
        $query = 'INSERT INTO tb_fju_category (name,status,created_at,updated_at) VALUES ("'.$aPayload['name'].'","'.$aPayload['status'].'","'.$aPayload['created_at'].'","'.$aPayload['updated_at'].'")';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();
    }

    public function getById($CategoryId){
        $query = 'SELECT * FROM tb_fju_category WHERE id = "'.$CategoryId.'" ';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function UpdateCategory($aPayload,$idCategory){
        $query = 'UPDATE tb_fju_category SET name="'.$aPayload['name'].'", status="'.$aPayload['status'].'", updated_at="'.$aPayload['updated_at'].'" WHERE id="'.$idCategory.'"  ';
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();  
    }

    public function DeleteCategory($id){
        $query = 'DELETE FROM tb_fju_category WHERE id='.$id;          
        $stmt = $this->conn->prepare($query);
        return $stmt->execute();  
    }
    
}



?>