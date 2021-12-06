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
        function nombreExiste() {
            // query to check if nombre exists
            $query = "SELECT nombre, password
                FROM " . $this->table_name . "
                WHERE nombre = 'Ian' LIMIT 0,1";
    
            // prepare the query
            $stmt = $this->conn->prepare($query);
    
            // sanitize
            $this->nombre = htmlspecialchars(strip_tags($this->nombre));
    
            // execute the query
            $stmt->execute();
    
            // get number of rows
            $num = $stmt->rowCount();
    
            // if nombre exists, assign values to object properties for easy access and use for php sessions
            if ($num > 0) {
    
                // get record details / values
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
                // assign values to object properties
                $this->nombre = $row['nombre'];
                $this->password = $row['password'];
    
                // return true because nombre exists in the database
                return true;
            }
            // return false if nombre does not exist in the database
            return false;
        }
}
?>