<?php
class User{
    public $id;
    public $nombre;
    public $password;

    private $conn;
    private $table_name = "users";

    // constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }
        // check if given nombre exist in the database
        function nombreExiste() {}
}
?>