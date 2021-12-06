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
    <h1>Agenda</h1>
    <!-- <table id="Contactos">
        <tr id="cabecera">
            <th>id</th>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
        <tr class="Contacto">
            <td>1</td>
            <td>Maria</td>
            <td>Germany</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
    </table> -->

    <?php
    include "conexion/db.php";

    try{
        // Creamos la instancia para que haga la conexión
        $db = new Database();
        $conn = $db->getConnection();

        // Creamos los querys a insertar
        $query = "SELECT * FROM contactos ";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        // Esta variable mostrará el número de filas de la bbdd
        $num = $stmt->rowCount();

        // Mientras tengamos filas, las mostrará
        if($num > 0){
            echo "<ul>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                echo "<li>{$id}" . " " . "{$Nombre}". " " . "{$Telefono}</li>";
            }
            echo "</ul>";
        }
    }
    catch(PDOException) {
        echo "No hay resultados";
    }
    ?>

    <br>
    <a href="create.php">Crear</a>
    <a href="delete.php">Eliminar</a>
    <a href="update.php">Actualizar</a>
</body>

</html>