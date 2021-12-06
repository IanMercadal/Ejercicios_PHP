<?php


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
    <table>
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

        <tr class="Contacto">
            <td>1</td>
            <td>Maria</td>
            <td>Germany</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
    </table>
    <form method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="telefono">
    </form>
    <button>Insertar</button>
</body>

</html>