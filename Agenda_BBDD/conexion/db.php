<?php 
class Database{

    // Credenciales
    private $host = 'localhost';
    private $db_name = 'agenda';
    private $username = 'root';
    private $password = 'root';

    // Conectar

    public function getConnection(){
 
        try{
            $con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException){
            echo "Connection error: ";
        }
        return $con;
    }
}