<?php 
class Database{

    // Credenciales
    private $host = "localhost";
    private $db_agenda = "agenda";
    private $username = "root";
    private $password = "root";
    
    public $conn;

    // Conectar

    public function getConnection(){
        $this->conn = null;

        // try{
        //     $this->conn = new PDO("mysql:host=" .$this->host . ";dbname=" )
        // }
    }
}


