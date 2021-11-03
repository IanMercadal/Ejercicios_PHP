<?php
// Crear clases

class Dispositivo{
     public function __construct(public string $nombre, public int $precio, public string $disponibilidad){
     }
     public function __set($name, $value)
     {
          $this->$name = $value;    
     }
}

// Llamara a las variables de la clase

$dispositivo = new Dispositivo('Tablet', 120, "Sí");
?>