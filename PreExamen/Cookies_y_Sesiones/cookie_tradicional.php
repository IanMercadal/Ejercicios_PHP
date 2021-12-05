<?php
setcookie('font-size','60px', time() + 60 * 60 * 24 * 30, '/');
?>

<?php
if(isset($_COOKIE['font-size'])){
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = '15px';
}
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<p>Valor de la fuente con cookie: " . "Holis Manolis </p>" ;
        ?>
    </body>
</html>