<?php
function conectarDB() : mysqli {
    $db = new mysqli('localhost','root','root','laravelLogin');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }else{
        echo "Conectado:";
        return $db;
    }
}
$db = conectarDB();
?>
<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
            $password = mysqli_real_escape_string($db, $_POST['password']);
    
            if(!$email){
                $errores[] = "El email es obligatorio o no es válido.";
            }
            if(!$password){
                $errores[] = "El password es obligatorio";
            }
            if(empty($errores)){
                $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
                $resultado = mysqli_query($db,$query);
    
                if($resultado -> num_rows){
                    // Revisar si el password es correcto
                    $usuario = mysqli_fetch_assoc($resultado);
                    // Verificar si el password es correcto o no
                    if($password == $usuario['password']){
                        // El usuario está autenticado
                        session_start();
                        // Llenar el array de la sesión
                        $_SESSION['usuario'] = $usuario['email'];
                        $_SESSION['login'] = true;
                        echo "<pre>";
                        echo "Iniciada la sesion";
                        echo "<br>";
                        var_dump($_SESSION);
                        echo "</pre>";
                    }else{
                        $errores[] = 'El password es incorrecto';
                    }
                }else{
                    $errores[] = "El usuario no existe";
                }
            }
        }
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
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST">
            <h1>Formulario</h1>
            <label>Usuario</label>
            <input type="text" id="email" name="email">
            <label>Contraseña</label>
            <input type="password" id="password" name="password">
            <input type="submit">
        </form>
    </body>
</html>