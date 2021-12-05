<?php
session_start();

if($_SESSION) {
    $nombre = $_SESSION["nombre"];
    echo "<h1> Hola $nombre </h1>";
} else{
    echo "No se como te llamas";
}
?>
<body>
    <a href="session3.php">Eliminar sesion</a>
</body>