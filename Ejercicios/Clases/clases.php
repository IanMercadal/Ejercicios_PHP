<?php
// ---------------------------- ------------------------------------

// Crear clases

class Publica{
     public $variablePublica;
     private $variablePrivada;
     protected $variableProtegida;

     public function variablePublica(){
         $publica = "Hola, soy pública";
         var_dump($publica);
     }

    public function variablePrivada(){
        $privada = "Hola, soy privada";
        var_dump($privada) ;
    }
    public function variableProtegida(){
        $protegida = "Hola, soy protegida";
        var_dump($protegida);
    }

}

// Llamara a las variables de la clases

$publica = new Publica();
$publica->variablePublica();
$publica->variablePrivada();
$publica->variableProtegida();


echo "<pre>";
var_dump($publica);
echo "</pre>";

// ---------------------------- ------------------------------------

class Prueba{
    
}
?>