<?php
class Persona{
    public $nombre;
    public $edad;
    public $pais;
    protected $correo;
    private $dni;

    function __construct($nombre, $edad, $pais,$correo, $dni){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        $this->correo = $correo;
        $this->dni = $dni;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais . " y su correo es " . 
        $this->correo . ", finalmente el dni " . $this->dni;
    }
}

class Estudiante extends Persona {
    function __construct($nombre,$edad,$pais,$estudios,$correo,$dni){
        parent::__construct($nombre,$edad,$pais,$correo,$dni);
        $this->estudios = $estudios;

    }
}

$sujeto = new Estudiante("Ian",19,"España","FP DAW","lolo@gmail.com","444444444F");
$sujeto->mostrarInformacion();

// Clase ABSTRACTA

abstract class Animal{
    public function saludar() {
        return "Guau";
    }
}
class Perro extends Animal {

}
$animal = new Perro("Nope");
echo "<br>";
echo $animal->saludar();

// Clase static

class Abstracta {
    public static $dia = "1 de enero";

    public static function saludar($nombre = null){
        if($nombre){
            return " Hola, $nombre";
        } else {
            return " Hola, buen día";
        }
    }
}
echo "<br>";
$abstracta = new Abstracta;
echo $abstracta::saludar("Ian");
?>