<?php
class Database{
    
    private $db_host = 'localhost/phpmyadmin';
    private $db_name = 'php_api';
    private $db_username = 'root';
    private $db_password = 'root';
    
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Erro ao conectar na base de dados!".$e->getMessage(); 
            exit;
        }
    }
}
?>