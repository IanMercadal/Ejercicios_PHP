<?php
if($_POST){
    include "conexion/db.php";

    try{
        $db = new Database();
        $conn = $db->getConnection();

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        $query = "UPDATE contactos set Nombre = '$nombre' , Telefono = $telefono where id = $id";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        echo "Usuario actualizado correctamente";

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

    <?php
       $db = new Database();
       $conn = $db->getConnection();

       $query = "SELECT * FROM contactos ";
       $stmt = $conn->prepare($query);
       $stmt->execute();

       $num = $stmt->rowCount();

       if($num > 0){
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               extract($row);
               echo "<li>{$id}" . " " . "{$Nombre}". " " . "{$Telefono}</li>";
           }
       }
    ?>

    <form method="POST">
        <label>Id</label>
        <input type="number" name="id">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="telefono">
        <input type="submit">
    </form>
    </body>
</html>