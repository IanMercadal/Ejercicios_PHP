<?php

if($_POST){
    // Incluimos los archivos necesarios
    require "conexion/db.php";
    include_once "conexion/user.php";
    
    // Conexión e instancia de objeto user
    $database = new Database();
    $db = $database->getConnection();
    
    $user = new User($db);
    
    // Comprobamos el nombre de user
    $user->nombre = $_POST['nombre'];
    $nombre_existe = $user->nombreExiste();

    // Validamos el login
    if (($_POST['nombre'] == $user->nombre) && ($_POST['password'] == $user->password)){
    
        // Añadimos a sesion datos
        $_SESSION['user_id'] = $user->id;
        $_SESSION['nombre'] = htmlspecialchars($user->firstname, ENT_QUOTES, 'UTF-8');
    
        header("Location: agenda.php");
    }
    
    // Si el user no introduce bien los datos
    else{
        echo "Acceso denegado";
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
    <header></header>
    <main>
        <h1>Login</h1>

        <form method="POST">
            <label>Nombre - Ian</label>
            <input type="text" name="nombre">
            <label>Password - Miau</label>
            <input type="text" name="password">

            <input type="submit">
        </form>
    </main>
</body>

</html>