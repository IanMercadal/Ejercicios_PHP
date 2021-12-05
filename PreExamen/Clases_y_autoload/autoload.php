<?php
// Para no tener que cambiar el nombre del archivo o de la clase

$clases = ["Persona"=> "./Clases/Persona.php"];



function mi_autoload($nombre){
    global $clases;
    require "$clases[$nombre]";    
}
spl_autoload_register('mi_autoload');

$obj = new Persona("Ian",19,"España","FP DAW","lolo@gmail.com","444444444F");
echo "<pre>";
var_dump($obj);
echo "</pre>";
?>