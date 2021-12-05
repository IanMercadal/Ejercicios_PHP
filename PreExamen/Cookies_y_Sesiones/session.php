<?php
session_start();

$_SESSION['nombre'] = "Ian";
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Página Sesión</h1>
        <?php
        echo $_SESSION['nombre'];
        echo "<br>";
        echo gettype($_SESSION);
        echo "<br>";
        ?>
        <a href="session2.php">Sesion 2</a>
    </body>
</html>