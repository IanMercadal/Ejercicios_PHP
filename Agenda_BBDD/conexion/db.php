<?php 
class Database{

    // Credenciales
    private $host = 'localhost';
    private $db_name = 'agenda';
    private $username = 'root';
    private $password = 'root';
    
    public $conn;

    // Conectar

    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}