<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario Sencillo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <h1>Registro de usuario</h1>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre"> <!-- value="Nombre" No es necesario  -->
            <input type="text" name="edad" placeholder="Edad"> <!-- value="Edad" No es necesario -->
            <input type="text" name="email" placeholder="email"> <!-- value="Email" No es necesario -->
            <button type="sumbit" value="submit">Enviar</button>
        </form> 

        <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        echo '<b>Info:</b> '.$nombre . ", " . $edad.", " . $email;
        ?>

    </body>
</html>