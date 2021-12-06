<?php

if($_POST){
// include classes
require "conexion/db.php";
include_once "conexion/user.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// check if Nombre and password are in the database
$user->nombre = $_POST['nombre'];
$nombre_existe = $user->nombreExiste();

// validate login
if ($nombre_existe && password_verify($_POST['password'], $user->password)){
 
    // if it is, set the session value to true
    $_SESSION['user_id'] = $user->id;
    $_SESSION['nombre'] = htmlspecialchars($user->firstname, ENT_QUOTES, 'UTF-8');
 
    header("Location: agenda.php");
}
 
// if username does not exist or password is wrong
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
    <link rel="stylesheet" href="">
</head>

<body>
    <header></header>
    <main>
        <h1>Login</h1>

        <form method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Password</label>
            <input type="text" name="password">

            <input type="submit">
        </form>
    </main>
</body>

</html>