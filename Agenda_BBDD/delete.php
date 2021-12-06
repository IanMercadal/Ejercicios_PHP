<?php
    include "conexion/db.php";

    if ($_POST) {

        try {
            $db = new Database();
            $conn = $db->getConnection();

            $id = $_POST['id'];
            $query = "DELETE from contactos where id = {$id} ";

            $stmt = $conn->prepare($query);
            $stmt->execute();

            echo "Usuario eliminado correctamente";
        } catch (PDOException) {
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
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <h1>Eliminar</h1>
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
        <label>Id</label>
        <input type="number" name="id">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="telefono">
        <input type="submit">
    </form>

    <br>
    <a href="agenda.php" class="link-boton">Agenda</a>
    <a href="create.php" class="link-boton">Crear</a>
    <a href="delete.php" class="link-boton">Eliminar</a>
    <a href="update.php" class="link-boton">Actualizar</a>
</body>

</html>