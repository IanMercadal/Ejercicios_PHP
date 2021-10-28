<?php
// Crear clases

class Dispositivos{

     public function __construct(public string $nombre, public int $precio, public string $disponibilidad){
     }

}

// Llamara a las variables de la clase

$dispositivo = new Dispositivos('Tablet', 120, "Sí");
?>

<Doctype html>
    <body>
        <?php
        echo "<pre>";
        var_dump($dispositivo);
        echo "</pre>";
        ?>
    </body>
</html>