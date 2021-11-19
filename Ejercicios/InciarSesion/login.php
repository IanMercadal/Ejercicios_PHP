<?php
function conectarDB() : mysqli {
    $db = new mysqli('localhost','root','root','laravelLogin');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }
    return $db;
}
$db = conectarDB();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST">
            <h1>Formulario</h1>
            <label>Usuario</label>
            <input type="text">
            <label>Contraseña</label>
            <input type="password">
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $errores = [];
            $nombre = mysqli_real_escape_string($db, filter_var($_POST['nombre'], FILTER_VALIDATE_EMAIL));
            $password = mysqli_real_escape_string($db, $_POST['password']);

            if(!$nombre){
                $errores[] = "El email es obligatorio o no es válido.";
            }
            if(!$password){
                $errores[] = "El password es obligatorio";
            }

            if(empty($errores)){
                $query = "SELECT * FROM usuarios WHERE nombre = '${nombre}' ";
                $resultado = mysqli_query($db,$query);
            }
        };
        ?>
    </body>
</html>