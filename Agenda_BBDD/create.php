<?php
include "conexion/db.php";
if($_POST){

    try{
        $db = new Database();
        $conn = $db->getConnection();

        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $query = "INSERT INTO contactos (Nombre,Telefono) VALUES ('$nombre','$telefono')";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        echo "Usuario insertado correctamente";

    }catch(PDOException){
        echo "Algo no ha salido bien";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>Crear</h1>
    <?php
        $db = new Database();
        $conn = $db->getConnection();
    
        $query = "SELECT * FROM contactos ";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        $num = $stmt->rowCount();
    
        if ($num > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<li>{$id}" . " " . "{$Nombre}" . " " . "{$Telefono}</li>";
            }
        }
    ?>

    <form method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="telefono">
        <input type="submit">
    </form>
    <br>
    <a href="agenda.php">Agenda</a>
    <a href="create.php">Crear</a>
    <a href="delete.php">Eliminar</a>
    <a href="update.php">Actualizar</a>
    </body>
</html>