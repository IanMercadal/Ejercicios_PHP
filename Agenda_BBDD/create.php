<?php
if($_POST){
    include "conexion/db.php";

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
    <form method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="telefono">
        <input type="submit">
    </form>
    </body>
</html>